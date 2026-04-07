<?php

use App\Http\Controllers\Location\GeoLocationController;
use Illuminate\Support\Facades\Route;

Route::get('/divisions', [GeoLocationController::class, 'getDivisions']);
Route::get('/districts/{division}', [GeoLocationController::class, 'getDistricts']);
Route::get('/upazilas/{district}', [GeoLocationController::class, 'getUpazilas']);

// Route::get('/staffs');