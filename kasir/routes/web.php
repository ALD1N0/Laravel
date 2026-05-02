<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgotPasswordController;


use App\Http\Controllers\AuthController;

// route publik (boleh diakses tanpa login)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');

    Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');

    Route::post('/transaksi', [DetailTransaksiController::class, 'store']);
    Route::get('/riwayat', [DetailTransaksiController::class, 'riwayat'])->name('riwayat');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/forgot-password', [ForgotPasswordController::class, 'formEmail'])->name('forgot.form');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendOtp'])->name('forgot.send');

Route::get('/otp', [ForgotPasswordController::class, 'formOtp'])->name('otp.form');
Route::post('/otp', [ForgotPasswordController::class, 'verifyOtp'])->name('otp.verify');

Route::get('/reset-password', [ForgotPasswordController::class, 'formReset'])->name('reset.form');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('reset.password');
