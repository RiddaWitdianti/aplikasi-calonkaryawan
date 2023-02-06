@extends('layouts.mainlayout')
@section('title', 'Add New Biodata')

@section('content')

    <div class="mt-5 col-5 m-auto">
        <form action="biodata" method="post">
            @csrf
            <div class="mb-3">
                <label for="posisi">Posisi</label>
                <input type="text" name="posisi" class="form-control" id="posisi" required>
            </div>

            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>

            <div class="mb-3">
                <label for="noktp">No. KTP</label>
                <input type="text" name="noktp" class="form-control" id="noktp" required>
            </div>

            <div class="mb-3">
                <label for="tempatlahir">Tempat Lahir</label>
                <input type="text" name="tempatlahir" class="form-control" id="tempatlahir" required>
            </div>

            <div class="mb-3">
                <label for="tgllahir">Tanggal Lahir</label>
                <input type="date" name="tgllahir" class="form-control" id="tgl-lahir" required>
            </div>

            <div class="mb-3">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select name="jeniskelamin" class="form-control" id="jeniskelamin">
                    <option value="">Select One</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="agama">Agama</label>
                <input type="text" name="agama" class="form-control" id="agama" required>
            </div>

            <div class="mb-3">
                <label for="golongandarah">Golongan Darah</label>
                <select name="golongandarah" class="form-control" id="golongandarah">
                    <option value="">Select One</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status">Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="">Select One</option>
                    <option value="Belum Kawin">Belum kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Cerai Hidup">Cerai Hidup</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="alamatktp">Alamat KTP</label>
                <textarea type="text" name="alamatktp" class="form-control" id="alamatktp" required></textarea>
            </div>

            <div class="mb-3">
                <label for="alamattinggal">Alamat Tinggal</label>
                <textarea type="text" name="alamattinggal" class="form-control" id="alamattinggal" required></textarea>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
                <label for="notelp">No. Telp</label>
                <input type="text" name="notelp" class="form-control" id="notelp" required>
            </div>

            <div class="mb-3">
                <label for="notelpbisadihubungi">Orang Terdekat Yang Dapat Dihubungi</label>
                <input type="text" name="notelpbisadihubungi" class="form-control" id="notelpbisadihubungi" required>
            </div>

            <div class="mb-3">
                <label for="skill">Skill</label>
                <input type="text" name="skill" class="form-control" id="skill" required>
            </div>

            <div class="mb-3">
                <label for="Ketersediaan">Bersedia Ditempatkan Di Seluruh Kantor Perusahaan</label>
                <select name="Ketersediaan" class="form-control" id="Ketersediaan">
                    <option value="">Select One</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="penghasilandiharapkan">Penghasilan Yang Diharapkan / Bulan</label>
                <input type="decimal" name="penghasilandiharapkan" class="form-control" id="penghasilandiharapkan"
                    required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection
