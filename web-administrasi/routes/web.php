<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\UangSakuController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Menambahkan rute santri
    Route::get('/santri', [SantriController::class, 'index'])->name('santri.index');
    // Rute untuk membuat santri baru
    Route::get('/santri/create', [SantriController::class, 'create'])->name('santri.create');
    // Rute untuk mengedit santri yang ada
    Route::get('/santri/{id}/edit', [SantriController::class, 'edit'])->name('santri.edit');
    // Rute untuk menghapus santri
    Route::delete('/santri/{id}', [SantriController::class, 'destroy'])->name('santri.destroy');
    // Menambahkan route untuk menyimpan data santri
    Route::post('/santri', [SantriController::class, 'store'])->name('santri.store');
    // Menambahkan route untuk memperbarui data santri
    Route::put('/santri/{id}', [SantriController::class, 'update'])->name('santri.update');

    // Menambahkan rute pembayaran
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
    // Menambahkan rute untuk membuat pembayaran baru
    Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
    // Menambahkan rute untuk menyimpan data pembayaran
    Route::post('/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
    // Menambahkan rute untuk menghapus pembayaran
    Route::delete('/pembayaran/{id}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy');
    Route::get('pembayaran/{id}/edit', [PembayaranController::class, 'edit'])->name('pembayaran.edit');
    Route::put('pembayaran/{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');

    // Menambahkan rute absensi
    Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
    // Menambahkan rute untuk membuat absensi baru
    Route::get('/absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
    // Menambahkan rute untuk menyimpan data absensi
    Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');
    // Menambahkan rute untuk menghapus absensi
    Route::delete('/absensi/{id}', [AbsensiController::class, 'destroy'])->name('absensi.destroy');

    // Menambahkan rute uang saku
    Route::get('/uang_saku', [UangSakuController::class, 'index'])->name('uang_saku.index');
    // Menambahkan rute untuk membuat uang saku baru
    Route::get('/uang_saku/create', [UangSakuController::class, 'create'])->name('uang_saku.create');
    // Menambahkan rute untuk menyimpan data uang saku
    Route::post('/uang_saku', [UangSakuController::class, 'store'])->name('uang_saku.store');
    // Menambahkan rute untuk menghapus data uang saku
    Route::delete('/uang_saku/{id}', [UangSakuController::class, 'destroy'])->name('uang_saku.destroy');

    // Menambahkan rute diskusi
    Route::get('/diskusi', [DiskusiController::class, 'index'])->name('diskusi.index');
    // Menambahkan rute untuk menyimpan diskusi
    Route::post('/diskusi', [DiskusiController::class, 'store'])->name('diskusi.store');
});

require __DIR__.'/auth.php';


