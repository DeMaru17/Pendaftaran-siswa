@extends('layouts.app')
@section('title','Data Peserta')
@section('content')


    
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table table-striped" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jurusan</th>
                                <th>Gelombang</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peserta as $p)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$p->nama_lengkap }}</td>
                                    <td>{{$p->jurusan->nama_jurusan}}</td>
                                    <td>{{$p->gelombang->nama_gelombang}}</td>
                                    <td>
                                        @if ($p->status == 0)
                                            Belum Ditentukan
                                        @elseif ($p->status == 1)
                                            Lolos
                                        @else
                                            Tidak Lolos
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('pendaftaran.show',$p->id)}}" class="btn btn-primary btn-sm">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    
        
@endsection