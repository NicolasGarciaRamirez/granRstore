<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);

Route::post('login',  [\App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::get('login', [\App\Http\Controllers\AuthController::class,'loginView'])->name('login.view');

Route::post('register', [\App\Http\Controllers\AuthController::class,'register'])->name('register');
Route::get('register', [\App\Http\Controllers\AuthController::class,'registerView'] )->name('register.view');

Route::post('logout', [\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
