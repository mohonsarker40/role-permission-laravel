<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/', [\App\Http\Controllers\AuthController::class, 'auth_login']);
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout']);

Route::get('panel/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard']);

Route::group(['middleware' => 'admin'], function (){

});
