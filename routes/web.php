<?php

use App\Http\Controllers\admins\DashboardController;
use App\Http\Controllers\admins\LoginController as AdminsLoginController;
use App\Http\Controllers\admins\SekolahController as AdminsSekolahController;
use App\Http\Controllers\LoginController;
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

Route::get('admin/login', [AdminsLoginController::class, 'index'])->name('admin.login');
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('admin/data-sekolah', [AdminsSekolahController::class, 'index'])->name('sekolah');
Route::post('admin/authenticate', [AdminsLoginController::class, 'authenticate'])->name('admin.autentikasi');
Route::get('admin/logout', [AdminsLoginController::class, 'logout'])->name('admin.logout');
