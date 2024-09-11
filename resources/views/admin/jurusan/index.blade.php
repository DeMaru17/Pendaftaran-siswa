@extends('layouts.app')
@section('title','Jurusan')
@section('content')

<div class="card">
    <div class="card-body">
      <a href="{{route('jurusan.create')}}" class="btn btn-primary mb-3">Tambah Jurusan</a>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Jurusan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($jurusan as $j)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{ $j->nama_jurusan }}</td>
              <td class="d-flex align-items-center">
                <a href="{{ route('jurusan.edit', $j->id) }}" class="btn btn-primary btn-sm mx-2 ">Edit</a>
                <a href="{{ route('jurusan.destroy', $j->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
    
@endsection