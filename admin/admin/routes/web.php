<?php

use App\Http\Controllers\BantuanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HasilCariController;
use App\Http\Controllers\JualProductController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TersimpanController;
use App\Http\Controllers\ServerManageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.dasboard');
});
// Route untuk halaman Sen's Market
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/hasilcari', [HasilCariController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index'])->name("profil");
Route::get('/produk', [ProductController::class, 'index'])->name("produk");
Route::get('/tersimpan', [TersimpanController::class, 'index'])->name("tersimpan");
Route::get('/jual', [JualProductController::class, 'index'])->name("jual");
Route::get('/pengaturan', [PengaturanController::class, 'index'])->name("pengaturan");
Route::get('/bantuan', [BantuanController::class, 'index'])->name("bantuan");
Route::get('/edit', [EditController::class, 'index'])->name("edit");
Route::get('/servermanage', [ServerManageController::class, 'index'])->name("servermanage");
Route::get('/user', [UserController::class, 'index'])->name("user");
Route::get('/barang', [BarangController::class, 'index'])->name("barang");

Route::get('/detail', function () {
    return view('pages.detail');
})->name('detail');

Route::get('/detailbarang', function () {
    return view('pages.detailbarang');
})->name('detailbarang');

Route::get('/toko', function () {
    return view('pages.toko');
})->name('toko');