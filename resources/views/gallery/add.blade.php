@extends('layout.master')

@section('title', 'Tambah Gambar Baru');

@section('container')
<div style="height: 100vh;">
    <div class="container h-100">
        <div class="row">
            <div class="col">
                <div class="card mt-3 w-50">
                    <div class="card-header">
                        Tambah Gambar Baru
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/image') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @error('upload')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" name="upload" class="custom-file-input" id="upload">
                                    <label class="custom-file-label" for="upload" aria-describedby="upload">Choose
                                        file</label>
                                </div>
                                <script>
                                    $('.custom-file-input').change(function () {
                                        var fileName = $('.custom-file-input').val();

                                        $('.custom-file-label').html(fileName);
                                    });

                                </script>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                @error('keterangan')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <textarea name="keterangan" id="keterangan"
                                    class="form-control">{{ old('keterangan') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
