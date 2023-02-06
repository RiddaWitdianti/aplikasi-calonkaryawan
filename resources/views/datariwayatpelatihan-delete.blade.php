@extends('layouts.mainlayout')

@section('title', 'Data Riwayat Pelatihan')

@section('content')

    <div class="mt-5">
        <h2>Are you sure to delete : {{ $datariwayatpelatihan->namakursus }} ({{ $datariwayatpelatihan->tahun }}) </h2>

        <form style="display: inline-block" action="/datariwayatpelatihan-destroy/{{ $datariwayatpelatihan->id }}"
            method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="/datariwayatpelatihan" class="btn btn-primary">Cancel</a>
    </div>

@endsection
