<?php

use App\Http\Controllers\DeroController;
use App\Http\Controllers\RejunoController;
use App\Http\Controllers\SumberBeningController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('pendudukdero', DeroController::class);
Route::apiResource('penduduksumberbening', SumberBeningController::class);
Route::apiResource('pendudukrejuno', RejunoController::class);