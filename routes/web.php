<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('airtime');
});

Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'pay']);
Route::get('/payment/success', [App\Http\Controllers\PaymentController::class, 'success']);
use App\Models\Wallet;

Route::get('/wallet', function () {
    $wallet = Wallet::firstOrCreate(
        ['user_id' => 1],
        ['balance' => 0]
    );

    return "Wallet Balance: ₦" . number_format($wallet->balance, 2);
});
