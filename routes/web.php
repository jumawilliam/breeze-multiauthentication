<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','normal'])
    ->name('dashboard');

    Route::view('admin', 'admin')
    ->middleware(['auth', 'verified','admin'])
    ->name('admin');

    Route::view('superadmin', 'superadmin')
    ->middleware(['auth', 'verified','superadmin'])
    ->name('superadmin');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
