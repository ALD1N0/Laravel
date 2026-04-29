<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route untuk halaman Home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Route untuk halaman Messages
Route::get('/messages', function () {
    return view('messages');
})->name('messages');

// Route untuk halaman Notifications
Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

// Route untuk halaman Profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Route untuk halaman More
Route::get('/more', function () {
    return view('more');
})->name('more');
