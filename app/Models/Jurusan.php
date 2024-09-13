<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $fillable = [
        'nama_jurusan'
    ];
    protected $date = ['deleted_at'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_jurusan', 'id_jurusan', 'id_level');
    }

     // Relasi ke tabel user_jurusan
     public function userJurusan()
     {
         return $this->hasMany(UserJurusan::class, 'id_jurusan', 'id');
     }
}
