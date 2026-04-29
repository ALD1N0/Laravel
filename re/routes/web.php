<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\UserprofileController;
use App\Http\Controllers\ProfilesController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    route::resource('home',HomeController::class);
    route::resource('notifications',NotificationController::class);
    route::resource('messages',MessagesController::class);
    route::resource('userprofile',UserprofileController::class);
    route::resource('more',MoreController::class);
    route::resource('profiles',ProfilesController::class);

    Route::get('/profile', [ProfilesController::class, 'show']);
    Route::get('/profile/edit/{id}', [ProfilesController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{id}', [ProfilesController::class, 'update'])->name('profile.update');
   


    Route::get('/', function () {
        return view('home.index');
    });
});

require __DIR__.'/auth.php';
