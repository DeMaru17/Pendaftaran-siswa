@extends('layouts.app')
@section('title','Edit Jurusan')
@section('content')

<div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('jurusan.update', $jurusan->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nama_jurusan">Nama Jurusan</label>
          <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="{{$jurusan->nama_jurusan}}" required>
        </div>
        <a href="{{route('jurusan.index')}}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">update Data</button>
      </form>
    </div>
  </div>
    
@endsection