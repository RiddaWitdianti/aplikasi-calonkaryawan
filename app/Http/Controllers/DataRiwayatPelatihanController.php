<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataRiwayatPelatihan;
use Illuminate\Support\Facades\Session;

class DataRiwayatPelatihanController extends Controller
{
    public function index()
    {
        // $datariwayatpelatihan = DataRiwayatPelatihan::with(['biodata'])->get();

        $datariwayatpelatihan = DataRiwayatPelatihan::all();
        return view('datariwayatpelatihan', ['datariwayatpelatihanList' => $datariwayatpelatihan]);
    }

    public function show($id)
    {
        $datariwayatpelatihan = DataRiwayatPelatihan::findOrFail($id);
        // dd($datariwayatpelatihan);
        return view('datariwayatpelatihan-detail', ['datariwayatpelatihan' => $datariwayatpelatihan]);
    }

    public function create()
    {
        $datariwayatpelatihan = DataRiwayatPelatihan::all();
        return view('datariwayatpelatihan-add', ['datariwayatpelatihan' => $datariwayatpelatihan]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $datariwayatpelatihan = new DataRiwayatPelatihan();
        // $datariwayatpelatihan->namakursus = $request->namakursus;
        // $datariwayatpelatihan->sertififkat = $request->sertififkat;
        // $datariwayatpelatihan->tahun = $request->tahun;
        // $datariwayatpelatihan->save();

        $datariwayatpelatihan = DataRiwayatPelatihan::create($request->all());

        if ($datariwayatpelatihan) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new data riwayat pelatihan success!');
        }

        return redirect('/datariwayatpelatihan');
    }

    public function edit($id)
    {
        $datariwayatpelatihan = DataRiwayatPelatihan::findOrFail($id);
        return view('datariwayatpelatihan-edit', ['datariwayatpelatihan' => $datariwayatpelatihan]);
    }

    public function update(Request $request, $id)
    {
        $datariwayatpelatihan = DataRiwayatPelatihan::findOrFail($id);

        // $datariwayatpelatihan->namakursus = $request->namakursus;
        // $datariwayatpelatihan->sertififkat = $request->sertififkat;
        // $datariwayatpelatihan->tahun = $request->tahun;
        // $datariwayatpelatihan->save();

        $datariwayatpelatihan->update($request->all());
        return redirect('/datariwayatpelatihan');
    }

    public function delete($id)
    {
        // dd($id);
        $datariwayatpelatihan = DataRiwayatPelatihan::findOrFail($id);
        return view('datariwayatpelatihan-delete', ['datariwayatpelatihan' => $datariwayatpelatihan]);
    }

    public function destroy($id)
    {

        $deletedDataRiwayatPelatihan = DataRiwayatPelatihan::findOrFail($id);
        $deletedDataRiwayatPelatihan->delete();

        if ($deletedDataRiwayatPelatihan) {
            Session::flash('status', 'success');
            Session::flash('message', 'delete data riwayat pelatihan success!');
        }

        return redirect('/datariwayatpelatihan');
    }
}
