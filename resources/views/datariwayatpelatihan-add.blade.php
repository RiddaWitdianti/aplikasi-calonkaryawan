@extends('layouts.mainlayout')
@section('title', 'Add New Data Riwayat Pelatihan')

@section('content')

    <div class="mt-5 col-5 m-auto">
        <form action="datariwayatpelatihan" method="post">
            @csrf
            <div class="mb-3">
                <label for="namakursus">Nama Kursus</label>
                <input type="text" name="namakursus" class="form-control" id="namakursus" required>
            </div>

            <div class="mb-3">
                <label for="sertififkat">Sertifikat</label>
                <select name="sertififkat" class="form-control" id="sertififkat">
                    <option value="">Select One</option>
                    <option value="Ada">Ada</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" class="form-control" id="tahun" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection
