<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return 'Hello World';
});

Route::get('/test', function () {
    return Inertia::render('Test');
})->name('test.view');
