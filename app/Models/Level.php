<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserJurusan;

class Level extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_level'
    ];
    protected $date = ['deleted_at'];

    public function user()
    {
        return $this->hasMany(UserJurusan::class, 'id_level', 'id');
    }

    public function jurusan()
    {
        return $this->belongsToMany(Jurusan::class, 'user_jurusan', 'id_level', 'id_jurusan');
    }
}
