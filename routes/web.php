<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Livewire\UsersList;
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

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::view('home', 'home')->name('home');
    Route::post('deposit', [UsersController::class, 'deposit'])->name('deposit');
    Route::post('withdraw', [UsersController::class, 'withdraw'])->name('withdraw');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::view('home', 'admin.home')->name('admin.home');
    Route::resource('users', UsersController::class)->only('index', 'edit');
});

