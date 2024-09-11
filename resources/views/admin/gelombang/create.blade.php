@extends('layouts.app')
@section('title','Tambah Gelombang')
@section('content')

<div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('gelombang.store') }}">
        @csrf
        <div class="form-group">
          <label for="nama_gelombang">Nama Gelombang</label>
          <input type="text" class="form-control" id="nama_gelombang" name="nama_gelombang" required>
        </div>
        <a href="{{route('gelombang.index')}}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
  </div>
    
@endsection