@extends('layouts.mainlayout')

@section('title', 'Data Edit Pendidikan Terakhir')

@section('content')

    <div class="mt-5">
        <h2>Are you sure to delete : {{ $datapendidikanterakhir->namainstitusi }} ({{ $datapendidikanterakhir->jurusan }})
        </h2>

        <form style="display: inline-block" action="/datapendidikanterakhir-destroy/{{ $datapendidikanterakhir->id }}"
            method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="/datapendidikanterakhir" class="btn btn-primary">Cancel</a>
    </div>

@endsection
