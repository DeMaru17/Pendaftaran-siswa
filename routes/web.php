<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Login routes
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

Route::resource('user', \App\Http\Controllers\UserController::class);
Route::delete('admin/user/softdelete/{id}', [UserController::class, 'softdelete'])->name('user.softDelete');

Route::resource('level', \App\Http\Controllers\LevelController::class);
Route::resource('jurusan', \App\Http\Controllers\JurusanController::class);
Route::resource('gelombang', \App\Http\Controllers\GelombangController::class);
