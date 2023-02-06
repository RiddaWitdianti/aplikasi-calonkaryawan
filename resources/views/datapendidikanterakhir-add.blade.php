@extends('layouts.mainlayout')
@section('title', 'Add New Data Pendidikan Terakhir')

@section('content')

    <div class="mt-5 col-5 m-auto">
        <form action="datapendidikanterakhir" method="post">
            @csrf
            <div class="mb-3">
                <label for="namainstitusi">Nama Institusi Akademik</label>
                <input type="text" name="namainstitusi" class="form-control" id="namainstitusi" required>
            </div>

            <div class="mb-3">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="jurusan" required>
            </div>

            <div class="mb-3">
                <label for="tahunlulus">Tahun Lulus</label>
                <input type="text" name="tahunlulus" class="form-control" id="tahunlulus" required>
            </div>

            <div class="mb-3">
                <label for="ipk">IPK</label>
                <input type="text" name="ipk" class="form-control" id="ipk" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection
