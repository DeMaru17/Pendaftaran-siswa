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
                            <th>Keterangan</th>
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
                                        Belum Diverifikasi
                                    @elseif ($p->status == 1)
                                        Tidak Lolos
                                    @elseif ($p->status == 2)
                                        Lolos Administrasi
                                    @elseif ($p->status == 3)
                                        Lolos Wawancara
                                    @elseif ($p->status == 4)
                                        Dinyatakan Lolos
                                    @endif
                                </td>
                                <td>
                                    @if ($p->status == 1)
                                    -
                                    @elseif ($p->keterangan == 0)
                                    Belum Dihubungi
                                    @elseif ($p->keterangan == 1)
                                    Telah dihubungi untuk wawancara
                                    @elseif ($p->keterangan == 2)
                                    Telah dihubungi lolos seleksi
                                    @endif

                                </td>
                                <td>
                                    <a href="{{route('data-peserta.show',$p->id)}}" class="btn btn-primary btn-sm">Detail</a>

                                    @if (Auth::user()->id_level == 7)
                                        @if ($p->status == 2)
                                            @php
                                            $phoneNumber = $p->nomor_hp;
                                            if (substr($phoneNumber, 0, 2) == '08') {
                                                $phoneNumber = '+62' . substr($phoneNumber, 1);
                                            }
                                            @endphp
                                            <form action="{{ route('keterangan', $p->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="keterangan" value="1">
                                                <button type="submit" class="btn btn-success btn-sm" onclick="window.open('https://wa.me/{{$phoneNumber}}?text=Selamat%20anda%20lolos%20administrasi.%20Silakan%20hadiri%20wawancara', '_blank');">
                                                    <i class="bi bi-whatsapp"></i> Undang Wawancara
                                                </button>
                                            </form>
                                        @elseif ($p->status == 3 || $p->status == 4)
                                            @php
                                            $phoneNumber = $p->nomor_hp;
                                            if (substr($phoneNumber, 0, 2) == '08') {
                                                $phoneNumber = '+62' . substr($phoneNumber, 1);
                                            }
                                            @endphp
                                            <form action="{{ route('keterangan', $p->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="keterangan" value="2">
                                                <button type="submit" class="btn btn-success btn-sm" onclick="window.open('https://wa.me/{{$phoneNumber}}?text=Selamat%20anda%20lolos%20seleksi.%20Silakan%20konfirmasi%20keikutsertaan', '_blank');">
                                                    <i class="bi bi-whatsapp"></i> Lolos Seleksi
                                                </button>
                                            </form>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
