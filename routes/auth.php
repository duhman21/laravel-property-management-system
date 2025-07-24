<?php

use Illuminate\Support\Facades\Route;

// Basic auth routes to prevent errors
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');
