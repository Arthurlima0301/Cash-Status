<?php

use Illuminate\Support\Facades\Route;

// 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/Profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('form-login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'create'])->name('form-register');
Route::post('/register', [UserController::class, 'store'])->name('register');
