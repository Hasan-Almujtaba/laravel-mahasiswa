@extends('layout.master')

@section('title', 'Detail Mahasiswa')

@section('container')
<div style="height:100vh">
    <div class="container h-100">
        <div class="row">
            <div class="col">
                <h3 class="mt-3">Detail Mahasiswa</h3>
                <div class="card w-50">
                    <div class="card-header">
                        {{ $student->nama }}
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>nrp</b> : {{ $student->nrp }}
                        </p>
                        <p class="card-text">
                            <b>email</b> : {{ $student->email }}
                        </p>
                        <p class="card-text">
                            <b>jurusan</b> : {{ $student->jurusan }}
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('student') }}" class="btn btn-primary btn-sm rounded-pill">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
