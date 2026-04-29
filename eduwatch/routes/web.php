<?php

use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login/index');
});

Route::get('/register', [RegisterController::class, 'index'])->name('tampilan_register');
Route::get('/login', [LoginController::class, 'index'])->name('tampilan_login');
Route::get('/forgot_password', [ForgotPassword::class, 'forgot_pass'])->name('forgot');
Route::get('/otp', [ForgotPassword::class, 'otp_page'])->name('otp_p');
Route::get('/password_baru', [ForgotPassword::class, 'new_pass'])->name('new_password');
Route::get('/home', [HomeController::class, 'home'])->name('home');
