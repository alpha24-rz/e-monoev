<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

// Login (POST)
Route::post('/login', [LoginController::class, 'login'])
    ->name('login');

// Logout (POST)
Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

// Home / Login Page
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('select-service');
    }

    return view('auth.login');
})->name('home');

// Select Service
Route::get('/select-service', function () {
    return view('auth.select-service');
})->middleware('auth')->name('select-service');

// E-Monev Dashboard
Route::get('/emonev', function () {
    return view('emonev');
})->middleware('auth')->name('emonev');

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');