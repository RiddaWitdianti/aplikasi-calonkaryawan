@extends('layouts.mainlayout')

@section('title', 'Data Riwayat Pekerjaan')

@section('content')
    <h1>Ini halaman Data Riwayat Pekerjaan</h1>

    <div class="my-5">
        <a href="datariwayatpekerjaan-add" class="btn btn-primary">Create Data</a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <h3>Data Riwayat Pekerjaan List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Perusahaan</th>
                <th>Posisi Terakhir</th>
                <th>Pendapatan Terakhir</th>
                <th>Tahun</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datariwayatpekerjaanList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->namaperusahaan }}</td>
                    <td>{{ $item->posisiterakhir }}</td>
                    <td>{{ $item->pendapatanterakhir }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>
                        <a href="datariwayatpekerjaan/{{ $item->id }}">Detail</a>
                        <a href="datariwayatpekerjaan-edit/{{ $item->id }}">Edit</a>
                        <a href="datariwayatpekerjaan-delete/{{ $item->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
