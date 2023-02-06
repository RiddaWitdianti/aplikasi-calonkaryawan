@extends('layouts.mainlayout')
@section('title', 'Biodata')

@section('content')

    <div class="mt-5">
        <h2>Are you sure to delete : {{ $biodata->nama }} ({{ $biodata->posisi }}) </h2>

        <form style="display: inline-block" action="/biodata-destroy/{{ $biodata->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="/biodata" class="btn btn-primary">Cancel</a>
    </div>

@endsection
