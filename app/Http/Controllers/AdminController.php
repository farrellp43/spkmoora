<?php

namespace App\Http\Controllers;

use App\{Alternative, Criteria, Value};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function map()
    {
        return view('admin/map');
    }

    public function alternativeRead()
    {
        $alternatives = Alternative::all();
        $classifications = Criteria::join('classifications', 'classifications.criteria_id', '=', 'criterias.id')->get();
        return view('admin/data/alternatives', compact('alternatives', 'classifications'));
    }

    public function alternativeCreate(Request $request)
    {
        DB::table('alternatives')->insert([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'vegetasi_area' => $request->criteria[0],
            'volume_material' => $request->criteria[1],
            'luas_daerah' => $request->criteria[2],
            'volume_tampungan' => $request->criteria[3],
            'lama_operasi' => $request->criteria[4],
            'harga_air' => $request->criteria[5],
            'akses_jalan' => $request->criteria[6],
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $getid = DB::table('alternatives')->orderBy('id', 'desc')->first();

        $length = count($request->criteria) + 1;
        for ($i = 1; $i < $length; $i++) {
            DB::table('values')->insert([
                'alternative_id' => $getid->id,
                'criteria_id' => "$i",
                'value' => $request->criteria[$i - 1],
                'user_id' => Auth::user()->id,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

        session()->flash('success', 'New alternative added');

        return redirect()->back();
    }

    public function criteriaRead()
    {
        $criterias = Criteria::all();
        return view('admin/data/criterias', compact('criterias'));
    }

    public function criteriaShow($criteria)
    {
        $alternatives = Value::where('criteria_id', '=', $criteria)->join('alternatives', 'alternatives.id', '=', 'values.alternative_id')->get();

        $criterias = Criteria::find($criteria);
        $classifications = Criteria::join('classifications', 'classifications.criteria_id', '=', 'criterias.id')->get();
        return view('admin/criteria/view', compact('alternatives', 'criterias', 'classifications'));
    }

    public function classificationRead()
    {
        $classifications = Criteria::join('classifications', 'classifications.criteria_id', '=', 'criterias.id')->get();
        return view('admin/classification', compact('classifications'));
    }

    public function userRead()
    {
        return view('admin/users');
    }

    public function editProfile()
    {
        return view('admin/profile');
    }
}
