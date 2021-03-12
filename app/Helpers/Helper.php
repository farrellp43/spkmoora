<?php

namespace App\Helpers;

use App\{Criteria, Value};
use Illuminate\Support\Facades\DB;

class Helper
{
    public static function criteriaMenu()
    {
        $criterias = Criteria::all();
        return $criterias;
    }

    public static function getCriteria()
    {
        // $getCriteria = Criteria::all();
        $getCriteria = DB::table('criterias')->get();
        $arrayCriteria = json_decode(json_encode($getCriteria), true);
        $criteria = array();

        foreach ($arrayCriteria as $row) {
            $criteria[$row['id']] = array($row['nama'], $row['tipe'], $row['bobot']);
        }

        // dd($criteria);

        return $criteria;
    }

    public static function getAlternative()
    {
        // $getAlternative = Alternative::all();
        $getAlternative = DB::table('alternatives')->get();
        $arrayAlternative = json_decode(json_encode($getAlternative), true);
        $alternative = array();

        foreach ($arrayAlternative as $row) {
            $alternative[$row['id']] = array(
                $row['nama'],
                $row['vegetasi_area'],
                $row['volume_material'],
                $row['luas_daerah'],
                $row['volume_tampungan'],
                $row['lama_operasi'],
                $row['harga_air'],
                $row['akses_jalan'],
            );
        }

        // dd($alternative);

        return $alternative;
    }

    public static function valMatrix()
    {
        $result = Value::all();
        $valMatrix = array();

        foreach ($result as $score) {
            $alternative = $score['alternative_id'];
            $criteria = $score['criteria_id'];
            $val = $score['value'];

            $valMatrix[$alternative][$criteria] = $val;
        }

        // dd($valMatrix);

        return $valMatrix;
    }

    public static function valNormal()
    {
        $criteria = Helper::getCriteria();
        $alternative = Helper::getAlternative();
        $matrix = Helper::valMatrix();

        // dd($criteria);
        // dd($alternative);

        $normal = $matrix;
        foreach ($criteria as $criteria_id => $c) {
            //-- inisialisasi nilai pembagi tiap kriteria
            $divider = 0;
            foreach ($alternative as $alternative_id => $a) {
                $divider += pow($matrix[$alternative_id][$criteria_id], 2);
            }
            foreach ($alternative as $alternative_id => $a) {
                $normal[$alternative_id][$criteria_id] /= sqrt($divider);
            }
        }

        // dd($normal);

        return $normal;
    }

    public static function valOptimize()
    {
        $criteria = Helper::getCriteria();
        $alternative = Helper::getAlternative();
        $normal = Helper::valNormal();

        $optimization = array();
        foreach ($alternative as $alternative_id => $a) {
            $optimization[$alternative_id] = 0;
            foreach ($criteria as $criteria_id => $c) {
                $optimization[$alternative_id] += $normal[$alternative_id][$criteria_id] * ($c[1] == 'benefit' ? 1 : -1) * $c[2];
            }
        }

        // dd($optimization);

        return $optimization;
    }
}