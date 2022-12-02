<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('', 'login')->name('login');
Route::view('register', 'register')->name('register');

Route::post('login', [AuthController::class, 'login'])->name('login.store');
Route::post('register', [AuthController::class, 'register'])->name('register.store');
