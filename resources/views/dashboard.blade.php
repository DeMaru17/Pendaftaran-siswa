@extends('layouts.app')
@section('title','Pendaftaran Pelatihan PPKD Jakarta Pusat')
@section('content')

<head>
    <title>Pendaftaran Pelatihan PPKD Jakarta Pusat</title>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat</h2>
                        <h5 class="text-center mb-4">Dinas Tenaga Kerja, Transmigrasi dan Energi Provinsi DKI Jakarta</h5>
                        <p class="card-text text-center">Membuka Pendaftaran untuk Kegiatan Pelatihan Tahun <span id="currentYear"></span></p>
                        <div class="text-center">
                        <a href="{{route('pendaftaran.create')}}" class="btn btn-primary btn-lg">Pendaftaran Pelatihan</a>
                        </div>
                        <h4 class="mt-5 mb-3">Program Pelatihan yang Tersedia:</h4>
                        <ul>
                            <!-- Loop Program Pelatihan -->
                            @foreach ($jurusan as $j)
                                <li>{{ $j->nama_jurusan }}</li>
                            @endforeach
                        </ul>

                        <h4 class="mt-5 mb-3">Fasilitas:</h4>
                        <ul>
                            <li>Program Pelatihan yang disusun Berbasis Kompetensi</li>
                            <li>Peralatan dan Bahan Praktek‍</li>
                            <li>Instruktur Profesional</li>
                            <li>Pakaian Seragam</li>
                            <li>Konsumsi</li>
                            <li>Sertifikat Pelatihan PPKD Jakarta Pusat</li>
                            <li>Uji Kompetensi dan Sertifikat kompetensi BNSP</li>
                            <li>Informasi pemasaran Kerja</li>
                        </ul>

                        <h4 class="mt-5 mb-3">Kuota Peserta:</h4>
                        <p>20 orang setiap Kejuruan</p>

                        <h4 class="mt-5 mb-3">Lokasi Pelatihan Reguler:</h4>
                        <p>Seluruh pelatihan reguler kecuali kejuruan Otomotif Sepeda Motor dan Teknik Pendingin akan dilaksanakan di kantor PPKD Jakarta Pusat, Jl. Karet Pasar Baru Barat V No. 23, Karet Tengsin, Tanah Abang, Jakarta Pusat.</p>

                        <h4 class="mt-5 mb-3">Dokumen Persyaratan:</h4>
                        <ul>
                            <li>Fotokopi KTP DKI Jakarta & Surat Keterangan Domisili untuk yang KTP Luar DKI Jakarta</li>
                            <li>Kartu Keluarga</li>
                            <li>Fotokopi Ijazah terakhir</li>
                            <li>Pas photo formal latar merah ukuran 3×4 (4 lembar)</li>
                            <li>Fotokopi Sertifikat Vaksin Covid-19</li>
                        </ul>

                        <p class="mt-4"><strong>Catatan:</strong> Pelatihan 100% GRATIS, peserta tidak dipungut biaya. Seluruh biaya dibebankan pada APBD DKI Jakarta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Set current year dynamically
        document.getElementById('currentYear').innerText = new Date().getFullYear();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>


@endsection
