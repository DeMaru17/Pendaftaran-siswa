@extends('layouts.app')
@section('title','Gelombang')
@section('content')

<div class="card">
    <div class="card-body">
      <a href="{{route('gelombang.create')}}" class="btn btn-primary mb-3">Tambah Gelombang</a>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Gelombang</th>
              <th>Aktif</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($gelombang as $g)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{ $g->nama_gelombang }}</td>
              <td>{{($g->aktif == '1' ? 'Aktif' : 'Tidak Aktif')}}            
              </td>
              <td class="d-flex align-items-center">
                <a href="{{ route('gelombang.edit', $g->id) }}" class="btn btn-primary btn-sm mx-2 ">Edit</a>
                <a href="{{ route('gelombang.destroy', $g->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
    
@endsection