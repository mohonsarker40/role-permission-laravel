<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth_login']);
Route::get('logout', [AuthController::class, 'logout']);


Route::group(['middleware' => 'admin'], function (){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
});
