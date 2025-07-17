<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'create'])->name('login');
    Route::post('login', [AuthController::class, 'store'])->name('login.store');
});


Route::middleware('auth')->group(function () {
    Route::get('/', [IndexController::class, 'index']);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('logout', [AuthController::class, 'destroy'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('users', [DashboardController::class, 'users'])->name('users');
});
