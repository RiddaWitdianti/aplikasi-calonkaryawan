@extends('layouts.mainlayout')

@section('title', 'Data Pendidikan Terakhir')

@section('content')
    <h1>Ini halaman Data Pendidikan Terakhir</h1>

    <div class="my-5">
        <a href="datapendidikanterakhir-add" class="btn btn-primary">Create Data</a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <h3>Data Pendidikan Terakhir List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Institusi Akademin</th>
                <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datapendidikanterakhirList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->namainstitusi }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->tahunlulus }}</td>
                    <td>{{ $item->ipk }}</td>
                    <td>
                        <a href="datapendidikanterakhir/{{ $item->id }}">Detail</a>
                        <a href="datapendidikanterakhir-edit/{{ $item->id }}">Edit</a>
                        <a href="datapendidikanterakhir-delete/{{ $item->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
