@extends('layout.master')

@section('title', 'Tambah Mahasiswa Baru');

@section('container')
    <div class="container h-100">
      <div class="row">
        <div class="col">
          <div class="card mt-3 w-50">
            <div class="card-header">
              Tambah Data Mahasiswa
            </div>
            <div class="card-body">
              <form action="{{ url('/student') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  @error('nama')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                  <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}">
                </div>
                <div class="form-group">
                  <label for="nrp">NRP</label>
                  @error('nrp')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                  <input type="number" name="nrp" class="form-control" id="nrp" value="{{ old('nrp') }}">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  @error('email')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                  <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  @error('jurusan')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                  <select name="jurusan" id="jurusan" class="custom-select">
                    <option value="">Pilih Jurusan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection