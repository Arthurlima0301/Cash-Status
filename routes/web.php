<?php

use Illuminate\Support\Facades\Route;

// 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('show-form-login');

Route::get('/register', [UserController::class, 'create'])->name('form-register');
Route::post('/register', [UserController::class, 'store'])->name('register');
