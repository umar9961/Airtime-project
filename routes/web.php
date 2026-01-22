<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Wallet;

Route::get('/', function () {
    return view('airtime');
});

Route::post('/buy-airtime', function (Request $request) {

    $request->validate([
        'phone'  => 'required',
        'amount' => 'required|numeric|min:50',
    ]);

    $wallet = Wallet::where('phone', $request->phone)->first();

    if (!$wallet) {
        return "❌ No wallet found for this phone number";
    }

    if ($wallet->balance < $request->amount) {
        return "❌ Insufficient wallet balance";
    }

    // Deduct balance
    $wallet->balance -= $request->amount;
    $wallet->save();

    return "✅ Airtime purchase successful. New balance: ₦" . $wallet->balance;
});
