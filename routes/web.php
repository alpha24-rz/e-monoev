<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

// Home Page
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('select-service');
    }

    return view('auth.login');
})->name('home');

Route::get('/emonev', function () {
    return view('emonev');
})->name('emonev');


// Select Service
Route::middleware('auth')->get('/select-service', function () {
    return view('auth.select-service');
})->name('select-service');

// Logout
Route::middleware('auth')->post('/logout', [LoginController::class, 'logout'])
    ->name('logout');
