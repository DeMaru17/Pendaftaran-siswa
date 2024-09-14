@extends('layouts.app')
@section('title', 'Edit Jurusan PIC')
@section('content')

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('pic-jurusan.update', $users->id ) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nama_lengkap">Jurusan</label>
         <select class="form-control" name="id_jurusan" id="">
             <option value="">Pilih Jurusan</option>
            @foreach ($jurusan as $j)
            <option value="{{$j->id}}" {{ $users->id_jurusan == $j->id ? 'selected' : '' }}>{{$j->nama_jurusan}}</option>
            @endforeach
         </select>
        </div>

        <a href="{{route('pic-jurusan.index')}}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
    </div>
  </div>

@endsection
