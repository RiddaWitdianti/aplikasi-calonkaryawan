<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataRiwayatPekerjaan;
use Illuminate\Support\Facades\Session;

class DataRiwayatPekerjaanController extends Controller
{
    public function index()
    {
        $datariwayatpekerjaan = DataRiwayatPekerjaan::all();
        return view('datariwayatpekerjaan', ['datariwayatpekerjaanList' => $datariwayatpekerjaan]);
    }

    public function show($id)
    {
        $datariwayatpekerjaan = DataRiwayatPekerjaan::findOrFail($id);
        return view('datariwayatpekerjaan-detail', ['datariwayatpekerjaan' => $datariwayatpekerjaan]);
    }

    public function create()
    {
        $datariwayatpekerjaan = DataRiwayatPekerjaan::all();
        return view('datariwayatpekerjaan-add', ['datariwayatpekerjaan' => $datariwayatpekerjaan]);
    }

    public function store(Request $request)
    {
        $datariwayatpekerjaan = DataRiwayatPekerjaan::create($request->all());

        if ($datariwayatpekerjaan) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new data riwayat pekerjaan success!');
        }

        return redirect('/datariwayatpekerjaan');
    }

    public function edit($id)
    {
        $datariwayatpekerjaan = DataRiwayatPekerjaan::findOrFail($id);
        return view('datariwayatpekerjaan-edit', ['datariwayatpekerjaan' => $datariwayatpekerjaan]);
    }

    public function update(Request $request, $id)
    {
        $datariwayatpekerjaan = DataRiwayatPekerjaan::findOrFail($id);
        $datariwayatpekerjaan->update($request->all());
        return redirect('/datariwayatpekerjaan');
    }

    public function delete($id)
    {
        // dd($id);
        $datariwayatpekerjaan = DataRiwayatPekerjaan::findOrFail($id);
        return view('datariwayatpekerjaan-delete', ['datariwayatpekerjaan' => $datariwayatpekerjaan]);
    }

    public function destroy($id)
    {

        $deletedDataRiwayatPekerjaan = DataRiwayatPekerjaan::findOrFail($id);
        $deletedDataRiwayatPekerjaan->delete();

        if ($deletedDataRiwayatPekerjaan) {
            Session::flash('status', 'success');
            Session::flash('message', 'delete data riwayat pekerjaan success!');
        }

        return redirect('/datariwayatpekerjaan');
    }
}
