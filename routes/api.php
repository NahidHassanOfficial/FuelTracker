<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return 'The API is reaching this point!';
});

// Route::get('/divisions');
// Route::get('/districts/{division_id}');
// Route::get('/upazilas/{district_id}');

// Route::get('/staffs');
