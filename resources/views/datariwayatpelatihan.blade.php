@extends('layouts.mainlayout')

@section('title', 'Data Riwayat Pelatihan')

@section('content')
    <h1>Ini halaman Data Riwayat Pelatihan</h1>

    <div class="my-5">
        <a href="datariwayatpelatihan-add" class="btn btn-primary">Create Data</a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <h3>Data Riwayat Pelatihan List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kursus / Seminar</th>
                <th>Sertifikat</th>
                <th>Tahun</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datariwayatpelatihanList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->namakursus }}</td>
                    <td>{{ $item->sertififkat }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>
                        <a href="datariwayatpelatihan/{{ $item->id }}">Detail</a>
                        <a href="datariwayatpelatihan-edit/{{ $item->id }}">Edit</a>
                        <a href="datariwayatpelatihan-delete/{{ $item->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
