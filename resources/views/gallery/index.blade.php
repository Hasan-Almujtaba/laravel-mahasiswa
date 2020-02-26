@extends('layout.master')

@section('title', 'Gallery')

@section('container')

    <div class="container min-vh-100">
        <div class="row">
            <div class="col">
                <a href="{{ url('image/create') }}" class="btn btn-primary rounded-pill mt-3">Tambah Gambar Baru</a>
            </div>
        </div>
        <div class="row">
            @foreach($images as $image)
            <div class="col-lg-4">
                <div class="card my-3">
                    <img src="{{ asset('storage/image/' . $image->gambar) }}" class="card-img-top" alt="Gambar"
                        width="300" height="250">
                    <div class="card-body">
                        <p class="card-text"></p>
                        <a href="{{ url('image/' .  $image->id) }}" class="btn btn-primary btn-sm rounded-pill">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{ url('image/' . $image->id . '/edit') }}"
                            class="btn btn-success btn-sm rounded-pill">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ url('image/' . $image->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm rounded-pill">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                {{ $images->links() }}
            </div>
        </div>
    </div>
@endsection
