@extends('layout.master')

@section('title', 'Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-3">Daftar Mahasiswa</h1>
                <a href="{{ url('/student/create') }}" class="btn btn-primary rounded-pill mb-3">Tambah Data Mahasiswa</a>
                <table class="table table-bordered table-responsive-sm">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">NRP</th>
                      <th scope="col">Email</th>
                      <th scope="col">Jurusan</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($students as $student)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                          <a href="{{ url('student/' .  $student->id) }}">{{ $student->nama }}</a>
                        </td>
                        <td>{{ $student->nrp }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->jurusan }}</td>
                        <td>
                          <a href="{{ url('student/' .  $student->id . '/edit') }}" class="btn btn-success btn-sm rounded-pill">edit</a>
                          {{-- <a href="#" class="badge badge-danger">hapus</a> --}}
                          <form action="{{ url('student/'. $student->id ) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm rounded-pill">Hapus</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>

                {{ $students->links() }}
            </div>
        </div>
    </div>
@endsection