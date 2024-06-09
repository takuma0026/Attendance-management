<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'create']);

Route::middleware('auth')->group(function () {
Route::get('/', [AuthController::class, 'index']);
 });
