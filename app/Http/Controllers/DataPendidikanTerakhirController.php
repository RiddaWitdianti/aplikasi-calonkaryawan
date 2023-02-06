<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPendidikanTerakhir;
use Illuminate\Support\Facades\Session;

class DataPendidikanTerakhirController extends Controller
{
    public function index()
    {
        $datapendidikanterakhir = DataPendidikanTerakhir::all();
        // dd($datapendidikanterakhir);
        return view('datapendidikanterakhir', ['datapendidikanterakhirList' => $datapendidikanterakhir]);
    }

    public function show($id)
    {
        $datapendidikanterakhir = DataPendidikanTerakhir::findOrFail($id);
        return view('datapendidikanterakhir-detail', ['datapendidikanterakhir' => $datapendidikanterakhir]);
    }

    public function create()
    {
        $datapendidikanterakhir = DataPendidikanTerakhir::all();
        return view('datapendidikanterakhir-add', ['datapendidikanterakhir' => $datapendidikanterakhir]);
    }

    public function store(Request $request)
    {
        $datapendidikanterakhir = DataPendidikanTerakhir::create($request->all());

        if ($datapendidikanterakhir) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new data pendidikan terakhir success!');
        }

        return redirect('/datapendidikanterakhir');
    }

    public function edit($id)
    {
        $datapendidikanterakhir = DataPendidikanTerakhir::findOrFail($id);
        return view('datapendidikanterakhir-edit', ['datapendidikanterakhir' => $datapendidikanterakhir]);
    }

    public function update(Request $request, $id)
    {
        $datapendidikanterakhir = DataPendidikanTerakhir::findOrFail($id);
        $datapendidikanterakhir->update($request->all());
        return redirect('/datapendidikanterakhir');
    }

    public function delete($id)
    {
        // dd($id);
        $datapendidikanterakhir = DataPendidikanTerakhir::findOrFail($id);
        return view('datapendidikanterakhir-delete', ['datapendidikanterakhir' => $datapendidikanterakhir]);
    }

    public function destroy($id)
    {

        $deletedDataPendidikanTerakhir = DataPendidikanTerakhir::findOrFail($id);
        $deletedDataPendidikanTerakhir->delete();

        if ($deletedDataPendidikanTerakhir) {
            Session::flash('status', 'success');
            Session::flash('message', 'delete data pendidikan terakhir success!');
        }

        return redirect('/datapendidikanterakhir');
    }
}
