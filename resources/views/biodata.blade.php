        @extends('layouts.mainlayout')
        @section('title', 'Biodata')

        @section('content')
            <h1>Ini halaman Biodata</h1>

            <div class="my-5">
                <a href="biodata-add" class="btn btn-primary">Create Data</a>
            </div>

            @if (Session::has('status'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <h3>Biodata List</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Posisi Yang Dilamar</th>
                        <th>Nama</th>
                        <th>No. KTP</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Golongan Darah</th>
                        <th>Status</th>
                        <th>Alamat KTP</th>
                        <th>Alamat Tinggal</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                        <th>Orang Terdekat Yang Dapat Dihubungi</th>
                        <th>Skill</th>
                        <th>Bersedia Ditempatkan Di Seluruh Kantor Perusahaan</th>
                        <th>Penghasilan Yang Diharapkan / Bulan</th>
                        <th>Data Pendidikan Terakhir</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodataList as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->posisi }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->noktp }}</td>
                            <td>{{ $item->tempatlahir }}</td>
                            <td>{{ $item->tgllahir }}</td>
                            <td>{{ $item->jeniskelamin }}</td>
                            <td>{{ $item->agama }}</td>
                            <td>{{ $item->goldarah }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->alamatktp }}</td>
                            <td>{{ $item->alamattinggal }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->notelp }}</td>
                            <td>{{ $item->notelpbisadihubungi }}</td>
                            <td>{{ $item->skill }}</td>
                            <td>{{ $item->Ketersediaan }}</td>
                            <td>{{ $item->penghasilandiharapkan }}</td>
                            <td>{{ $item->datapendidikanterakhir }}</td>
                            <td>
                                <a href="biodata/{{ $item->id }}">Detail</a>
                                <a href="biodata-edit/{{ $item->id }}">Edit</a>
                                <a href="biodata-delete/{{ $item->id }}">Delete</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endsection
