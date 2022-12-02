<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::view('', 'login')->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.store');

    Route::view('register', 'register')->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.store');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::view('home', 'home')->name('home');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::view('home', 'home')->name('home');
});
