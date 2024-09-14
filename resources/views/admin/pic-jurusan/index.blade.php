@extends('layouts.app')
@section('title', 'Jurusan PIC & Instruktur')
@section('content')

  <div class="card">
    <div class="card-body">
      <a href="{{route('pic-jurusan.create')}}" class="btn btn-primary mb-3">Tambah Jurusan</a>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Nama Level</th>
              <th>Jurusan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>

            @foreach($users as $user)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$user->user->nama_lengkap }}</td>
              <td>{{ $user->level->nama_level}}</td>
              <td>{{$user->jurusan->nama_jurusan}}
            </td>
              <td class="d-flex align-items-center">
                <a href="{{ route('pic-jurusan.edit', $user->id) }}" class="btn btn-primary btn-sm mx-2 ">Edit</a>
                <a href="{{ route('pic-jurusan.destroy', $user->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
