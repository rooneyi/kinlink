<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('naye-business', function () {
    return Inertia::render('NayeBusiness');
})->name('naye.business');

Route::get('naye-pro', function () {
    return Inertia::render('NayePro');
})->name('naye.pro');

Route::get('naye-community', function () {
    return Inertia::render('NayeCommunity');
})->name('naye.community');

Route::get('about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('search-profil', function () {
    return Inertia::render('NayePro');
})->name('search.profil');

Route::get('missions', function () {
    return Inertia::render('Missions');
})->name('missions');

Route::get('abonnement-business', function () {
    return Inertia::render('AbonnementBusiness');
})->name('abonnement.business');

Route::get('trainings', function () {
    return Inertia::render('Training');
})->name('trainings');

Route::get('wenze', function () {
    return Inertia::render('WenzeEmarket');
})->name('wenze');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
