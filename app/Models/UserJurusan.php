<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJurusan extends Model
{
    use HasFactory;

    protected $table = 'user_jurusan';

    protected $fillable = [
        'id_jurusan',
        'id_level'
    ];

    // Relasi ke tabel Jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }

    // Relasi ke tabel Level
    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level', 'id');
    }
}
