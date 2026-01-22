<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('airtime');
});

Route::get('/data', function () {
    return view('data');
});

Route::post('/pay', function (Request $request) {
    return "Airtime Sent Successfully";
});

Route::post('/buy-data', function (Request $request) {
    return "Data Sent Successfully";
});
