<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/', [\App\Http\Controllers\AuthController::class, 'auth_login']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('panel/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard']);
