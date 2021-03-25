<?php

namespace App\Http\Controllers;

use App\{Alternative, Classification, Criteria, User, Value};
use App\Helpers\Helper;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $countAlternatives = Alternative::count();
        $countCriterias = Criteria::count();
        $countValues = Value::count();
        $countUsers = User::count();

        $alternative = Helper::getAlternative();
        $optimization = Helper::valOptimize();

        //--mengurutkan data secara descending dengan tetap mempertahankan key/index array-nya
        arsort($optimization);
        //-- mendapatkan key/index item array yang pertama
        $index = key($optimization);

        $rank = 1;

        return view('admin/dashboard', compact('countAlternatives', 'countCriterias', 'countValues', 'countUsers', 'optimization', 'alternative', 'rank'));
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

    public function alternativeEdit($id)
    {
        $getAlternative = Alternative::find($id);
        $values = Value::where('alternative_id', '=', $id)->join('criterias', 'criterias.id', '=', 'values.criteria_id')->get();

        // dd($values);

        return view('admin/data/alternativeEdit', compact('getAlternative', 'values'));
    }

    public function alternativeUpdate(Request $request)
    {
        // Validator::make($request->all(), [
        //     'nama' => 'required|max:30',
        //     'kode' => 'required',
        //     'vegetasi_area' => 'required|numeric',
        //     'volume_material' => 'required|numeric',
        //     'luas_daerah' => 'required|numeric',
        //     'volume_tampungan' => 'required|numeric',
        //     'lama_operasi' => 'required|numeric',
        //     'harga_air' => 'required|numeric',
        //     'akses_jalan' => 'required|numeric',
        // ])->validate();

        DB::table('alternatives')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'vegetasi_area' => $request->criteria[0],
            'volume_material' => $request->criteria[1],
            'luas_daerah' => $request->criteria[2],
            'volume_tampungan' => $request->criteria[3],
            'lama_operasi' => $request->criteria[4],
            'harga_air' => $request->criteria[5],
            'akses_jalan' => $request->criteria[6],
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $length = count($request->criteria) + 1;

        for ($i = 1; $i < $length; $i++) {
            DB::table('values')->where('alternative_id', $request->id)->where('criteria_id', $i)->update([
                'value' => $request->criteria[$i - 1],
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

        session()->flash('info', 'Alternative updated');

        return redirect(route('alternatives.read'));
    }

    public function alternativeDelete($id)
    {
        DB::table('values')->where('alternative_id', $id)->delete();
        DB::table('alternatives')->where('id', $id)->delete();

        session()->flash('danger', 'Alternative deleted');

        return redirect()->back();
    }

    public function criteriaRead()
    {
        $criterias = Criteria::all();
        return view('admin/data/criterias', compact('criterias'));
    }

    public function criteriaEdit($id)
    {
        $allCriteria = Criteria::all();
        $criteria = Criteria::find($id);

        return view('admin/data/criteriaEdit', compact('allCriteria', 'criteria'));
    }

    public function criteriaUpdate(Request $request)
    {
        DB::table('criterias')->where('id', $request->id)->update([
            'tipe' => $request->tipe,
            'bobot' => $request->bobot,
        ]);

        session()->flash('info', 'Criteria updated');

        return redirect(route('criterias.read'));
    }

    public function criteriaShow($criteria)
    {
        $alternatives = Value::where('criteria_id', '=', $criteria)->join('alternatives', 'alternatives.id', '=', 'values.alternative_id')->get();

        $criterias = Criteria::find($criteria);
        $classifications = Criteria::join('classifications', 'classifications.criteria_id', '=', 'criterias.id')->get();
        return view('admin/criteria/view', compact('alternatives', 'criterias', 'classifications'));
    }

    public function criteriaValueUpdate(Request $request)
    {
        $update = Value::find($request->id);
        $update->value = $request->value;
        $update->save();

        session()->flash('info', 'Value updated');

        return redirect()->back();
    }

    public function classificationRead()
    {
        $classifications = Criteria::join('classifications', 'classifications.criteria_id', '=', 'criterias.id')->get();
        return view('admin/classification', compact('classifications'));
    }

    public function classificationUpdate(Request $request)
    {
        $update = Classification::find($request->id);
        $update->classification = $request->classification;
        $update->save();

        session()->flash('info', 'Classification updated');

        return redirect(route('classification.read'));
    }

    public function userRead()
    {
        $users = User::get();
        return view('admin/users', compact('users'));
    }

    public function userUpdate(Request $request)
    {
        $update = User::find($request->id);
        $update->name = $request->name;
        $update->role = $request->role;
        $update->save();

        session()->flash('info', 'User updated');

        return redirect()->back();
    }

    public function userDelete(Request $request)
    {
        $data = User::find($request->id);
        $data->delete();

        session()->flash('danger', 'User deleted');
        
        return back();
    }

    public function editProfile()
    {
        return view('admin/profile');
    }
}
