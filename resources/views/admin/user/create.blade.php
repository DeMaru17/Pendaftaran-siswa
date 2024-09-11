@extends('layouts.app')
@section('title', 'Create User')
@section('content')

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="form-group">
          <label for="nama_level">Nama Level</label>
          <select class="form-control" name="id_level" id="">
            <option value="">Pilih Level</option>
            @foreach ($levels as $level)
            <option value="{{ $level->id }}">{{ $level->nama_level }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
        <a href="{{route('user.index')}}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Tambah User</button>
      </form>
    </div>
  </div>

@endsection
