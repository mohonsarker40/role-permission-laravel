<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use \App\Http\Controllers\RoleController;


Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth_login']);
Route::get('logout', [AuthController::class, 'logout']);


Route::group(['middleware' => 'admin'], function (){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/role', [RoleController::class, 'list']);
    Route::get('admin/role/add', [RoleController::class, 'add']);
    Route::post('admin/role/insert', [RoleController::class, 'insert']);
    Route::get('admin/role/edit/{id}', [RoleController::class, 'edit']);
    Route::post('admin/role/update/{id}', [RoleController::class, 'update']);
    Route::get('admin/role/delete/{id}', [RoleController::class, 'delete']);
});
