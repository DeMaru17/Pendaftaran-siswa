@extends('layouts.app')
@section('title', 'Edit User')
@section('content')

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('user.update', $users->id ) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nama_level">Nama Level</label>
          <select class="form-control" name="id_level" id="">
            <option value="">Pilih Level</option>
            {{-- @foreach ($levels as $level)
            <option value="{{ $level->id }}" selected>{{ $level->nama_level }}</option>
            @endforeach --}}
            @foreach ($levels as $level )
                        <option {{$level->id == $users->id_level ? 'selected' : ' ' }} value="{{ $level->id }}">{{ $level->nama_level }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{$users->nama_lengkap}}" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{$users->email}}" required>
        </div>
        <div class="form-group">
            <label for="password">Password Lama</label>
            <input type="password" class="form-control" id="old_password" name="old_password">
        </div>
        <div class="form-group">
            <label for="password">Password Baru</label>
            <input type="password" class="form-control" id="new_password" name="new_password">
        </div>
        <a href="{{route('user.index')}}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
    </div>
  </div>

@endsection
