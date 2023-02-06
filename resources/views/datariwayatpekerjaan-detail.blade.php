@extends('layouts.mainlayout')

@section('title', 'Data Riwayat Pekerjaan')

@section('content')
    <h1>Anda Sedang Melihat Data Detail RiwayatPekrjaan Karyawan {{ $datariwayatpekerjaan->namaperusahaan }}
    </h1>

    <div class="mt-5">
        <table class="table table-bordered">
            <tr>
                <th>Nama Perusahaan</th>
                <th>Posisi Terakhir</th>
                <th>Pendapatan Terakhir</th>
                <th>Tahun</th>
            </tr>

            <tr>
                <td>{{ $datariwayatpekerjaan->namaperusahaan }}</td>
                <td>{{ $datariwayatpekerjaan->posisiterakhir }}</td>
                <td>{{ $datariwayatpekerjaan->pendapatanterakhir }}</td>
                <td>{{ $datariwayatpekerjaan->tahun }}</td>
            </tr>
        </table>
    </div>

@endsection
