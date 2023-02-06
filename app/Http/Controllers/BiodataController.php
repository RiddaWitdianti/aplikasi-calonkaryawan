<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class BiodataController extends Controller
{
    public function index()
    {
        // $biodata = Biodata::with(['datariwayatpelatihan'])->get();

        $biodata = Biodata::all();
        // dd($biodata);
        return view('biodata', ['biodataList' => $biodata]);
    }

    public function show($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata-detail', ['biodata' => $biodata]);
    }

    public function create()
    {
        // dd('berhasil bikin method');
        $biodata = Biodata::all();
        return view('biodata-add', ['biodata' => $biodata]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $biodata = Biodata::create($request->all());

        if ($biodata) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new biodata success!');
        }

        return redirect('/biodata ');
    }

    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        // dd($biodata);
        return view('biodata-edit', ['biodata' => $biodata]);
    }

    public function update(Request $request, $id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->update($request->all());
        return redirect('/biodata');
    }

    public function delete($id)
    {
        // dd($id);
        $biodata = Biodata::findOrFail($id);
        return view('biodata-delete', ['biodata' => $biodata]);
    }

    public function destroy($id)
    {
        // $deleteBiodata = DB::table('biodatas')->where('id', $id)->delete();

        $deletedBiodata = Biodata::findOrFail($id);
        $deletedBiodata->delete();

        if ($deletedBiodata) {
            Session::flash('status', 'success');
            Session::flash('message', 'delete biodata success!');
        }

        return redirect('/biodata');
    }
}
