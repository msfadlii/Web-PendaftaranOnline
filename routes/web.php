<?php

use App\Http\Controllers\admins\DashboardController;
use App\Http\Controllers\admins\LoginController as AdminsLoginController;
use App\Http\Controllers\admins\SekolahController as AdminsSekolahController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\users\PendaftaranController;
use App\Http\Controllers\users\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => ''], function() {
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/', function(){
            return view('users.welcome');
        });

        Route::get('login', [LoginController::class, 'index'])->name('akun.login');
        Route::get('register', [LoginController::class, 'register'])->name('akun.register');
        Route::post('proses-register', [LoginController::class, 'prosesRegister'])->name('akun.prosesRegister');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('akun.autentikasi');
    });
    Route::group(['middleware' => 'auth'], function(){
        Route::get('home-page', [UserController::class, 'index'])->name('user.index');
        Route::get('siswa-page', [UserController::class, 'siswa_index'])->name('user.siswa.index');
        Route::get('daftar-page', [UserController::class, 'daftar_index'])->name('user.daftar.index');
        Route::post('daftar-store', [UserController::class, 'daftar_store'])->name('user.daftar.store');

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

        //Siswa
        Route::get('data-siswa', [SiswaController::class, 'index'])->name('siswa.index');
        Route::get('data-siswa/{users_nik}', [SiswaController::class, 'show'])->name('siswa.show');
        Route::get('edit-siswa/{users_nik}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
        Route::put('edit-siswa/{users_nik}', [SiswaController::class, 'update'])->name('siswa.update');
        Route::delete('delete-siswa/{users_nik}', [SiswaController::class, 'destroy'])->name('siswa.delete');

        //Konfirmasi
        Route::get('konfirmasi-siswa', [SiswaController::class, 'konfirmasi'])->name('konfirm.index');
        Route::post('konfirmasi-siswa/confirm/{nik}', [SiswaController::class, 'confirm'])->name('konfirm.confirm');
        Route::post('konfirmasi-siswa/reject/{nik}', [SiswaController::class, 'reject'])->name('konfirm.reject');
        Route::delete('konfirmasi-siswa/delete/{nik}', [SiswaController::class, 'delete'])->name('konfirm.delete');
    });
});