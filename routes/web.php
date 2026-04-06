<?php

use App\Http\Controllers\Auth\StationAuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return 'Hello World';
});

Route::get('/test', function () {
    return Inertia::render('Test');
})->name('test.view');

// Route::get('/logout');
// Route::get('/register');

Route::prefix('/station')->group(function () {
    Route::get('/login', [StationAuthController::class, 'index'])->name('station.login.view');
    Route::post('/login', [StationAuthController::class, 'login'])->name('station.login.post');
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
