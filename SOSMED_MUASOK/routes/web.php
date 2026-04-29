<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\masuk;



Route::middleware('guest')->group(callback: function () {
    // Route::get('login', [AuthController::class, 'showLoginForm']);
    Route::get('login', [AuthController::class, 'showLoginForm']);
    Route::post('login', [masuk::class, 'login'])->name('login');
    
    Route::get('register', [AuthController::class, 'showRegistrationForm']);
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/notifications', [PageController::class, 'notifications'])->name('notifications');
Route::get('/messages', [PageController::class, 'messages'])->name('messages');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/more', [PageController::class, 'more'])->name('more');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

