<?php

// File: app/Models/Pendaftaran.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Register extends Model
{
    protected $table = 'peserta_pelatihan';
    protected $fillable = [
        'id_gelombang',
        'id_jurusan',
        'nama_lengkap',
        'email',
        'nomor_hp',
        'nik',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'kartu_keluarga',
        'pendidikan_terakhir',
        'nama_sekolah',
        'kejuruan',
        'aktivitas_saat_ini',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function gelombang()
    {
        return $this->belongsTo(Gelombang::class, 'id_gelombang', 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }

    public function getKartuKeluargaAttribute($value)
    {
        return Storage::url($value);
    }
}
