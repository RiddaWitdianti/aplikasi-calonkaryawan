@extends('layouts.mainlayout')

@section('title', 'Data Riwayat Pekerjaan')

@section('content')

    <div class="mt-5">
        <h2>Are you sure to delete : {{ $datariwayatpekerjaan->namaperusahaan }} ({{ $datariwayatpekerjaan->tahun }}) </h2>

        <form style="display: inline-block" action="/datariwayatpekerjaan-destroy/{{ $datariwayatpekerjaan->id }}"
            method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="/datariwayatpekerjaan" class="btn btn-primary">Cancel</a>
    </div>

@endsection
