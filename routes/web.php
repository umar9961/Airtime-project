<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('airtime');
});

Route::post('/buy-airtime', function () {
    return "Airtime request received";
});

Route::post('/buy-data', function () {
    return "Data request received";
});
