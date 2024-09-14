<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Jurusan;

Route::get('/', function () {
    $jurusan = Jurusan::whereNull('deleted_at')->get();
    return view('dashboard', compact('jurusan'));
});

// user
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('pendaftaran',  [\App\Http\Controllers\RegisterController::class, 'create'])->name('pendaftaran.create');
Route::post('pendaftaran', [\App\Http\Controllers\RegisterController::class, 'store'])->name('pendaftaran.store');

// Login routes
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::resource('user', \App\Http\Controllers\UserController::class);
Route::delete('admin/user/softdelete/{id}', [UserController::class, 'softdelete'])->name('user.softDelete');

Route::resource('level', \App\Http\Controllers\LevelController::class);
Route::resource('jurusan', \App\Http\Controllers\JurusanController::class);
Route::resource('gelombang', \App\Http\Controllers\GelombangController::class);
Route::resource('pic-jurusan', \App\Http\Controllers\PicController::class);
Route::resource('data-peserta', \App\Http\Controllers\RegisterController::class);

