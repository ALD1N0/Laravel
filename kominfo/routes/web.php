<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/mysql_dero', function () {
    try {
        DB::connection('mysql_dero')->getPdo();
        return "Koneksi ke DB dero berhasil!";
    } catch (\Exception $e) {
        return "Gagal konek: " . $e->getMessage();
    }
});