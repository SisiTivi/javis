<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// home page
Route::get('/', function () {
    return view('index');
})->name('index')
    ->middleware('auth');

// login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// login process
Route::post('login', [AuthController::class, 'login'])
    ->name('login.process')
    ->middleware('throttle:5,1');

// register page
Route::get('/register', function () {
    return view('register');
})->name('register');

// register process
Route::post('register', [AuthController::class, 'register'])
    ->name('register.process');

// logout
Route::post('logout', [AuthController::class, 'logout'])
    ->name('logout');
