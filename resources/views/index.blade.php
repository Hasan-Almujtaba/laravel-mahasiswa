@extends('layout.master')

@section('title', 'Beranda')

@section('container')
    <div class="container min-vh-100">
        <div class="row">
            <div class="col text-center">
                <h1 class="mt-5">Selamat Datang</h1>
                <a href="{{ url('/student') }}" class="btn btn-primary rounded-pill mt-3">Lihat Mahasiswa</a>
            </div>
        </div>
    </div>
@endsection
