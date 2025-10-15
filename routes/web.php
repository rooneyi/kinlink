<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Nouvelles routes
Route::get('naye-business', function () {
    return Inertia::render('NayeBusiness');
})->name('naye.business');

Route::get('naye-pro', function () {
    return Inertia::render('NayePro');
})->name('naye.pro');

Route::get('naye-community', function () {
    return Inertia::render('NayeCommunity');
})->name('naye.community');

Route::get('wenze-emarket', function () {
    return Inertia::render('WenzeEmarket');
})->name('wenze.emarket');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
