<?php

use App\Http\Controllers\admins\DashboardController;
use App\Http\Controllers\admins\LoginController as AdminsLoginController;
use App\Http\Controllers\admins\SekolahController as AdminsSekolahController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => ''], function() {
    Route::group(['middleware' => 'guest'], function(){
        Route::get('login', [LoginController::class, 'index'])->name('akun.login');
        Route::get('/', [LoginController::class, 'index'])->name('akun.login');
        Route::get('register', [LoginController::class, 'register'])->name('akun.register');
        Route::post('proses-register', [LoginController::class, 'prosesRegister'])->name('akun.prosesRegister');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('akun.autentikasi');

        Route::get('welcome-page', function(){
            return view('users.welcome');
        })->name('welcomepage');
    });
    Route::group(['middleware' => 'auth'], function(){
        Route::get('logout', [LoginController::class, 'logout'])->name('akun.logout');
        
    });
});

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::get('login', [AdminsLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminsLoginController::class, 'authenticate'])->name('admin.autentikasi');
    });
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminsLoginController::class, 'logout'])->name('admin.logout');
        
        Route::get('data-sekolah', [AdminsSekolahController::class, 'index'])->name('sekolah.index');
        Route::get('data-sekolah/{npsn}', [AdminsSekolahController::class, 'show'])->name('sekolah.show');
        Route::get('create-sekolah', [AdminsSekolahController::class, 'create'])->name('sekolah.create');
        Route::post('store-sekolah', [AdminsSekolahController::class, 'store'])->name('sekolah.store');
        Route::get('edit-sekolah/{npsn}/edit', [AdminsSekolahController::class, 'edit'])->name('sekolah.edit');
        Route::put('edit-sekolah/{npsn}', [AdminsSekolahController::class, 'update'])->name('sekolah.update');
        Route::delete('delete-sekolah/{npsn}', [AdminsSekolahController::class, 'destroy'])->name('sekolah.delete');

        Route::get('data-siswa', [SiswaController::class, 'index'])->name('siswa.index');
        Route::get('data-siswa/{users_nik}', [SiswaController::class, 'show'])->name('siswa.show');
        Route::get('edit-siswa/{users_nik}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
        Route::put('edit-siswa/{users_nik}', [SiswaController::class, 'update'])->name('siswa.update');
        Route::delete('delete-siswa/{users_nik}', [SiswaController::class, 'destroy'])->name('siswa.delete');
    });
});