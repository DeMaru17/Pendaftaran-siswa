@extends('layouts.app')
@section('title','Detail Peserta')
@section('content')


<div class="card">

    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $peserta->nama_lengkap }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $peserta->email }}</td>
            </tr>
            <tr>
                <th>Nomor HP</th>
                <td>{{ $peserta->nomor_hp }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>{{ $peserta->nik }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $peserta->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $peserta->tempat_lahir }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ date('d-m-Y', strtotime($peserta->tanggal_lahir)) }}</td>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <td>{{ $peserta->pendidikan_terakhir }}</td>
            </tr>
            <tr>
                <th>Nama Sekolah</th>
                <td>{{ $peserta->nama_sekolah }}</td>
            </tr>
            <tr>
                <th>Kejuruan</th>
                <td>{{ $peserta->kejuruan }}</td>
            </tr>
            <tr>
                <th>Aktivitas Saat Ini</th>
                <td>{{ $peserta->aktivitas_saat_ini }}</td>
            </tr>
            <tr>
                <th>Gelombang</th>
                <td>{{ $peserta->gelombang->nama_gelombang }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ $peserta->jurusan->nama_jurusan }}</td>
            </tr>
            <tr>
                <th>Kartu Keluarga</th>
                <td>
                    @if ($peserta->kartu_keluarga)
                        <a href="{{ asset($peserta->kartu_keluarga) }}" target="_blank">Download Kartu Keluarga</a>
                    @else
                        Tidak ada kartu keluarga
                    @endif
                </td>
            </tr>
        </table>

        <form action="{{ route('data-peserta.update', $peserta->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="status">Status Peserta:</label>
                <select name="status" id="status" class="form-control">
                    <option value="">Pilih Status</option>
                    <option value="2">Lolos Administrasi</option>
                    <option value="1">Tidak Lolos</option>
                </select>
            </div>



        <a href="{{route('data-peserta.index')}}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary mx-3">Update Status</button>
    </form>
    </div>
</div>


@endsection
