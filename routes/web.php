<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('airtime');
});

Route::post('/pay', [PaymentController::class, 'pay']);
