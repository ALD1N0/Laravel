<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::resource('produk', ProdukController::class)->parameters([
//     'produk' => 'id'
// ]);

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');

Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
Route::post('/transaksi', [DetailTransaksiController::class, 'store']);
Route::get('/riwayat', [DetailTransaksiController::class, 'riwayat'])->name('riwayat');