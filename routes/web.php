<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('airtime');
});

Route::post('/pay', function (Request $request) {
    return response()->json([
        'network' => $request->network,
        'phone' => $request->phone,
        'amount' => $request->amount,
    ]);
});
