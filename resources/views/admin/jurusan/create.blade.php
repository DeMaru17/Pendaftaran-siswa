@extends('layouts.app')
@section('title','Tambah Jurusan')
@section('content')

<div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('jurusan.store') }}">
        @csrf
        <div class="form-group">
          <label for="nama_jurusan">Nama Jurusan</label>
          <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" required>
        </div>
        <a href="{{route('jurusan.index')}}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
  </div>
    
@endsection