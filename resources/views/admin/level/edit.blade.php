@extends('layouts.app')
@section('title','Edit Level')
@section('content')

<div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('level.update', $levels->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nama_level">Nama Level</label>
          <input type="text" class="form-control" id="nama_level" name="nama_level" value="{{$levels->nama_level}}" required>
        </div>
        <a href="{{route('level.index')}}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
    </div>
  </div>
    
@endsection