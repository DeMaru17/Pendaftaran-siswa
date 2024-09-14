@extends('layouts.app')
@section('title', 'Tambah User')
@section('content')

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('pic-jurusan.store') }}">
        @csrf
        <div class="form-group">
          <label for="nama_lengkap">User</label>
          <select class="form-control" name="id_user" id="">
            <option value="">Pilih User</option>
            @foreach ($user as $item)
            <option value="{{ $item->id }}">{{ $item->nama_lengkap }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" name="id_jurusan" id="">
              <option value="">Pilih Jurusan</option>
              @foreach ($jurusans as $jurusan)
                <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
              @endforeach
            </select>
        </div>
        @php
          $picLevel = DB::table('levels')->where('nama_level', 'PIC')->first();
          $picLevelId = $picLevel ? $picLevel->id : '';
        @endphp
        <input type="hidden" name="id_level" value="{{ $picLevelId }}">
        <a href="{{route('pic-jurusan.index')}}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
  </div>

@endsection
