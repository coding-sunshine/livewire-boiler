<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

if (config('settings.auth')) {
    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    require __DIR__ . '/auth.php';
}

Route::get('/', HomeController::class);
