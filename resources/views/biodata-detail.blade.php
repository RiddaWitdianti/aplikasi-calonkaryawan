@extends('layouts.mainlayout')
@section('title', 'Biodata')

@section('content')

    <h2>Anda Sedang Melihat Data Detail Biodata Data Diri Karyawan Yang Bernama {{ $biodata->nama }}</h2>

    <div class="mt-5">
        <table class="table table-bordered">
            <tr>
                <th>Posisi Yang Dilamar</th>
                <th>Nama</th>
                <th>No. KTP</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Golongan Darah</th>
                <th>Status</th>
                <th>Alamat KTP</th>
                <th>Alamat Tinggal</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>Orang Terdekat Yang Dapat Dihubungi</th>
                <th>Skill</th>
                <th>Bersedia Ditempatkan Di Seluruh Kantor Perusahaan</th>
                <th>Penghasilan Yang Diharapkan / Bulan</th>
            </tr>
            <tr>

                <td>{{ $biodata->posisi }}</td>
                <td>{{ $biodata->nama }}</td>
                <td>{{ $biodata->noktp }}</td>
                <td>{{ $biodata->tempatlahir }}</td>
                <td>{{ $biodata->tgllahir }}</td>
                <td>{{ $biodata->jeniskelamin }}</td>
                <td>{{ $biodata->agama }}</td>
                <td>{{ $biodata->goldarah }}</td>
                <td>{{ $biodata->status }}</td>
                <td>{{ $biodata->alamatktp }}</td>
                <td>{{ $biodata->alamattinggal }}</td>
                <td>{{ $biodata->email }}</td>
                <td>{{ $biodata->notelp }}</td>
                <td>{{ $biodata->notelpbisadihubungi }}</td>
                <td>{{ $biodata->skill }}</td>
                <td>{{ $biodata->Ketersediaan }}</td>
                <td>{{ $biodata->penghasilandiharapkan }}</td>
            </tr>
        </table>
    </div>

    {{-- {{ $biodata }} --}}
    {{-- {{ $datapendidikanterakhir }} --}}

@endsection
