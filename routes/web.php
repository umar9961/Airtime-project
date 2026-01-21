<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('airtime');
});

Route::post('/pay', [\App\Http\Controllers\PaymentController::class, 'pay']);
