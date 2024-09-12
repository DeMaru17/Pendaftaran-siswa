<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaPelatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_pelatihan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jurusan');
            $table->unsignedBigInteger('id_gelombang');
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('kartu_keluarga');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pendidikan_terakhir');
            $table->string('nama_sekolah');
            $table->string('kejuruan');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('aktivitas_saat_ini');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_jurusan')->references('id')->on('jurusan');
            $table->foreign('id_gelombang')->references('id')->on('gelombang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_pelatihan');
    }
}
