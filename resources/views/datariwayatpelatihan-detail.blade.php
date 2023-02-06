@extends('layouts.mainlayout')

@section('title', 'Data Riwayat Pelatihan')

@section('content')
    <h1>Anda Sedang Melihat Data Detail Riwayat Pelatihan Karyawan {{ $datariwayatpelatihan->namakursus }}
    </h1>

    <div class="mt-5">
        <table class="table table-bordered">
            <tr>
                <th>Nama Kursus / Seminar</th>
                <th>Sertifikat</th>
                <th>Tahun</th>
            </tr>

            <tr>
                <td>{{ $datariwayatpelatihan->namakursus }}</td>
                <td>{{ $datariwayatpelatihan->sertififkat }}</td>
                <td>{{ $datariwayatpelatihan->tahun }}</td>
            </tr>
        </table>
    </div>

@endsection
