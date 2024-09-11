@extends('layouts.app')
@section('title', 'User')
@section('content')

  <div class="card">
    <div class="card-body">
      <a href="{{route('user.create')}}" class="btn btn-primary mb-3">Tambah User</a>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nama Level</th>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->level->nama_level }}</td>
              <td>{{ $user->nama_lengkap }}</td>
              <td>{{ $user->email }}</td>
              <td class="d-flex align-items-center">
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm mx-2 ">Edit</a>
                <a href="{{ route('user.softDelete', $user->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
