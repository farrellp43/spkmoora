<?php

namespace App\Http\Controllers;

use App\Alternative;
use App\Criteria;
use App\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MooraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getCriteria()
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

    public function getAlternative()
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

    public function valMatrix()
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

    public function valNormal()
    {
        $criteria = $this->getCriteria();
        $alternative = $this->getAlternative();
        $matrix = $this->valMatrix();

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

    public function valOptimize()
    {
        $criteria = $this->getCriteria();
        $alternative = $this->getAlternative();
        $normal = $this->valNormal();

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

    public function matrix()
    {
        $matrix = $this->valMatrix();

        return view('moora/matrix', compact('matrix'));
    }

    public function normalization()
    {
        $normal = $this->valNormal();
        $matrix = $this->valMatrix();

        return view('moora/normalization', compact('normal', 'matrix'));
    }

    public function optimization()
    {
        $alternative = $this->getAlternative();
        $optimization = $this->valOptimize();

        return view('moora/optimization', compact('optimization', 'alternative'));
    }

    public function ranking()
    {
        $alternative = $this->getAlternative();
        $optimization = $this->valOptimize();

        //--mengurutkan data secara descending dengan tetap mempertahankan key/index array-nya
        arsort($optimization);
        //-- mendapatkan key/index item array yang pertama
        $index = key($optimization);

        $rank = 1;

        return view('moora/ranking', compact('optimization', 'alternative', 'rank'));
    }
}
