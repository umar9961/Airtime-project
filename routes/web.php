<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('airtime');
});

Route::post('/pay', function () {
    return "Airtime request received (payment coming later)";
});
