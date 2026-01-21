use App\Http\Controllers\PaymentController;

Route::post('/pay', [PaymentController::class, 'pay'])->name('pay');
Route::get('/payment/success', [PaymentController::class, 'success']);<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('airtime');
});

Route::post('/buy-airtime', function () {
    return "Airtime request received";
});

Route::post('/buy-data', function () {
    return "Data request received";
});
