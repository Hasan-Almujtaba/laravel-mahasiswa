@extends('layout.master')

@section('title', 'Detail Gambar')

@section('container')
<div style="height: 100vh">
    <div class="container h-100">
        <div class="row">
            <div class="col text-center">
                <img src="{{ asset('storage/image/' . $image->gambar) }}" alt="" class="img-thumbnail mt-3 rounded" width="500" height="250">
                <p>{{ $image->keterangan }}</p>
                <a href="{{ url('download/' . $image->id) }}" class="btn btn-primary btn-sm rounded-pill">Download Gambar</a>
            </div>
        </div>
    </div>
</div>
@endsection
