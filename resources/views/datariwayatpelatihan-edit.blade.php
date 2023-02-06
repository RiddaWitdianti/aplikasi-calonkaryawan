@extends('layouts.mainlayout')
@section('title', 'Edit Data Riwayat Pelatihan')

@section('content')

    <div class="mt-5 col-5 m-auto">
        <form action="/datariwayatpelatihan/{{ $datariwayatpelatihan->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="namakursus">Nama Kursus</label>
                <input type="text" name="namakursus" class="form-control" id="namakursus"
                    value="{{ $datariwayatpelatihan->namakursus }}" required>
            </div>

            <div class="mb-3">
                <label for="sertififkat">Sertifikat</label>
                <select name="sertififkat" class="form-control" id="sertififkat">
                    <option value="{{ $datariwayatpelatihan->sertififkat }}">{{ $datariwayatpelatihan->sertififkat }}
                    </option>
                    @if ($datariwayatpelatihan->sertififkat == 'Tidak')
                        <option value="Ada">Ada</option>
                    @else
                        <option value="Tidak">Tidak</option>
                    @endif
                </select>
            </div>

            <div class="mb-3">
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" class="form-control" id="tahun"
                    value="{{ $datariwayatpelatihan->tahun }}" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection
