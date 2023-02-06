        @extends('layouts.mainlayout')
        @section('title', 'Home')

        @section('content')
            {{-- <h1>Ini halaman home</h1> --}}
            <h2>Selamat Datang, {{ $name }}</h2>
            <h2>Anda adalah {{ $role }}</h2>

        @endsection
