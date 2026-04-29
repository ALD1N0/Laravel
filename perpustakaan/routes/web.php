<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BorrowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route untuk halaman utama
Route::get('/', function () {
    return view('home'); // Sesuaikan dengan halaman utama perpustakaan Anda
});
// Resource routes untuk BookController
Route::resource('books', BookController::class);

// Resource routes untuk MemberController
Route::resource('members', MemberController::class);

// Resource routes untuk BorrowController
Route::resource('borrow', BorrowController::class);
