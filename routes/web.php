<?php

use App\Http\Controllers\Auth\StationAuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return 'Hello World';
})->name('home');

// Route::get('/logout');

Route::prefix('/station')->group(function () {
    Route::get('/login', [StationAuthController::class, 'index'])->name('station.login.view');
    Route::post('/login', [StationAuthController::class, 'login'])->name('station.login.post');

    Route::get('/register', [StationAuthController::class, 'registerView'])->name('station.register.view');
    Route::post('/register', [StationAuthController::class, 'register'])->name('station.register.post');
    Route::get('/verify/station/{station}', [StationAuthController::class, 'verifyStation'])->name('station.verify')->middleware('signed');
    // Route::get('/dashboard');
    // Route::get('/fuel/config');
    // Route::get('/fuel/refill');
    // Route::get('/staffs');
    // Route::get('/reports');
    // Route::get('/sell/history');
    // Route::get('/settings');

});

// Route::get('/staff/dashboard');
// Route::get('/staff/history');