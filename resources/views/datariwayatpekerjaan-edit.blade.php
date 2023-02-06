@extends('layouts.mainlayout')

@section('title', 'Data Riwayat Pekerjaan')

@section('content')

    <div class="mt-5 col-5 m-auto">
        <form action="/datariwayatpekerjaan/{{ $datariwayatpekerjaan->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="namaperusahaan">Nama Perusahaan</label>
                <input type="text" name="namaperusahaan" class="form-control" id="namaperusahaan"
                    value="{{ $datariwayatpekerjaan->namaperusahaan }}" required>
            </div>

            <div class="mb-3">
                <label for="posisiterakhir">Posisi Terakhir</label>
                <input type="text" name="posisiterakhir" class="form-control" id="posisiterakhir"
                    value="{{ $datariwayatpekerjaan->posisiterakhir }}" required>
            </div>

            <div class="mb-3">
                <label for="pendapatanterakhir">Pendapatan Akhir</label>
                <input type="text" name="pendapatanterakhir" class="form-control" id="pendapatanterakhir"
                    value="{{ $datariwayatpekerjaan->pendapatanterakhir }}" required>
            </div>

            <div class="mb-3">
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" class="form-control" id="tahun"
                    value="{{ $datariwayatpekerjaan->tahun }}" required>
            </div>



            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection
