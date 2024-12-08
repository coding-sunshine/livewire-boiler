<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

if (config('settings.auth')) {
    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    require __DIR__ . '/auth.php';
}
