@extends('layouts.mainlayout')
@section('title', 'Edit Biodata')

@section('content')

    <div class="mt-5 col-5 m-auto">
        <form action="/biodata/{{ $biodata->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="posisi">Posisi</label>
                <input type="text" name="posisi" class="form-control" id="posisi" value="{{ $biodata->posisi }}" required>
            </div>

            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $biodata->nama }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="noktp">No. KTP</label>
                <input type="text" name="noktp" class="form-control" id="noktp" value="{{ $biodata->noktp }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="tempatlahir">Tempat Lahir</label>
                <input type="text" name="tempatlahir" class="form-control" id="tempatlahir"
                    value="{{ $biodata->tempatlahir }}" required>
            </div>

            <div class="mb-3">
                <label for="tgllahir">Tanggal Lahir</label>
                <input type="date" name="tgllahir" class="form-control" id="tgl-lahir" value="{{ $biodata->tgllahir }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select name="jeniskelamin" class="form-control" id="jeniskelamin">
                    <option value="{{ $biodata->jeniskelamin }}">{{ $biodata->jeniskelamin }}
                    </option>
                    @if ($biodata->jeniskelamin == 'Perempuan')
                        <option value="Laki-Laki">Laki-Laki</option>
                    @else
                        <option value="Perempuan">Perempuan</option>
                    @endif
                </select>
            </div>

            <div class="mb-3">
                <label for="agama">Agama</label>
                <input type="text" name="agama" class="form-control" id="agama" value="{{ $biodata->agama }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="goldarah">Golongan Darah</label>
                <select name="goldarah" class="form-control" id="goldarah">
                    <option value="{{ $biodata->goldarah }}">{{ $biodata->goldarah }}
                    </option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status">Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="{{ $biodata->status }}">{{ $biodata->status }}
                    </option>
                    <option value="Kawin">Kawin</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Cerai Hidup">Cerai Hidup</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="alamatktp">Alamat KTP</label>
                <input type="text" name="alamatktp" class="form-control" id="alamatktp"
                    value="{{ $biodata->alamatktp }}" required>
            </div>

            <div class="mb-3">
                <label for="alamattinggal">Alamat Tinggal</label>
                <input type="text" name="alamattinggal" class="form-control" id="alamattinggal"
                    value="{{ $biodata->alamattinggal }}" required>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" value="{{ $biodata->email }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="notelp">No. Telp</label>
                <input type="text" name="notelp" class="form-control" id="notelp" value="{{ $biodata->notelp }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="notelpbisadihubungi">Orang Terdekat Yang Dapat Dihubungi</label>
                <input type="text" name="notelpbisadihubungi" class="form-control" id="notelpbisadihubungi"
                    value="{{ $biodata->notelpbisadihubungi }}" required>
            </div>

            <div class="mb-3">
                <label for="skill">Skill</label>
                <input type="text" name="skill" class="form-control" id="skill" value="{{ $biodata->skill }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="Ketersediaan">Bersedia Ditempatkan Di Seluruh Kantor Perusahaan</label>
                <select name="Ketersediaan" class="form-control" id="Ketersediaan">
                    <option value="{{ $biodata->Ketersediaan }}">{{ $biodata->Ketersediaan }}</option>
                    @if ($biodata->Ketersediaan == 'Tidak')
                        <option value="Ya">Ya</option>
                    @else
                        <option value="Tidak">Tidak</option>
                    @endif
                </select>
            </div>

            <div class="mb-3">
                <label for="penghasilandiharapkan">Penghasilan Yang Diharapkan / Bulan</label>
                <input type="decimal" name="penghasilandiharapkan" class="form-control" id="penghasilandiharapkan"
                    value="{{ $biodata->penghasilandiharapkan }}" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection
