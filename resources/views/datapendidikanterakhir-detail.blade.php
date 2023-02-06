@extends('layouts.mainlayout')

@section('title', 'Data Pendidikan Terakhir')

@section('content')
    <h1>Anda Sedang Melihat Data Detail Pendidikan Terakhir Karyawan {{ $datapendidikanterakhir->namainstitusi }}
    </h1>

    <div class="mt-5">
        <table class="table table-bordered">
            <tr>
                <th>Nama Institusi Akademin</th>
                <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>IPK</th>
            </tr>

            <tr>
                <td>{{ $datapendidikanterakhir->namainstitusi }}</td>
                <td>{{ $datapendidikanterakhir->jurusan }}</td>
                <td>{{ $datapendidikanterakhir->tahunlulus }}</td>
                <td>{{ $datapendidikanterakhir->ipk }}</td>
            </tr>
        </table>
    </div>



@endsection
