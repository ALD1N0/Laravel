<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

// Route ke halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// === ROUTE AUTENTIKASI ===
// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Halaman Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// === ROUTE UNTUK USER YANG LOGIN ===
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // === ROUTE UNTUK POST (CRUD) ===
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); // Read
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Form create
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Create
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show'); // Detail post
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Form edit
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update'); // Update
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); // Delete
});
