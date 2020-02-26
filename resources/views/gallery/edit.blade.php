@extends('layout.master')

@section('title', 'Edit Gambar');

@section('container')
<div style="height: 100vh;">
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mt-3">
                    <div class="card-header">
                        Edit Gambar
                    </div>
                    <div class="card-body">
                      <p>Gambar Saat ini :</p>
                      <img src="{{ asset('storage/image/' . $image->gambar) }}" alt="" class="img-thumbnail mb-3" width="300" height="250">
                        <form action="{{ url('/image/' . $image->id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="old_image" value="{{ $image->gambar }}">
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
                                    class="form-control">{{ $image->keterangan }}</textarea>
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
