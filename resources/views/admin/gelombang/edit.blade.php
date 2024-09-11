@extends('layouts.app')
@section('title','Tambah Gelombang')
@section('content')

<div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('gelombang.update',$gelombang->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nama_gelombang">Nama Gelombang</label>
          <input type="text" class="form-control" id="nama_gelombang" name="nama_gelombang" value="{{$gelombang->nama_gelombang}}" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="aktif" id="" value="1">
            <label class="form-check-label" for="aktif">Aktif</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="aktif" id="" value="0">
            <label class="form-check-label" for="aktif">Tidak Aktif</label>
        </div>  
        <div class="mt-3">
            <a href="{{route('gelombang.index')}}" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>  
        
      </form>
    </div>
  </div>
    
@endsection