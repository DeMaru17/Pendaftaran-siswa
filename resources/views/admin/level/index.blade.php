@extends('layouts.app')
@section('title','Level')
@section('content')

<div class="card">
    <div class="card-body">
      <a href="{{route('level.create')}}" class="btn btn-primary mb-3">Tambah Level</a>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Level</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($levels as $lvl)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{ $lvl->nama_level }}</td>
              <td class="d-flex align-items-center">
                <a href="{{ route('level.edit', $lvl->id) }}" class="btn btn-primary btn-sm mx-2 ">Edit</a>
                <a href="{{ route('level.destroy', $lvl->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
    
@endsection