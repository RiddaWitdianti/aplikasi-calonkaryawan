@extends('layouts.mainlayout')
@section('title', 'Add New Data Riwayat Pekerjaan')

@section('content')

    <div class="mt-5 col-5 m-auto">
        <form action="datariwayatpekerjaan" method="post">
            @csrf
            <div class="mb-3">
                <label for="namaperusahaan">Nama Perusahaan</label>
                <input type="text" name="namaperusahaan" class="form-control" id="namaperusahaan" required>
            </div>

            <div class="mb-3">
                <label for="posisiterakhir">Posisi Terakhir</label>
                <input type="text" name="posisiterakhir" class="form-control" id="posisiterakhir" required>
            </div>

            <div class="mb-3">
                <label for="pendapatanterakhir">Pendapatan Terakhir</label>
                <input type="decimal" name="pendapatanterakhir" class="form-control" id="pendapatanterakhir" required>
            </div>

            <div class="mb-3">
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" class="form-control" id="tahun" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection
