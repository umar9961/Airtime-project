<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "✅ Airtime Project is Working!";
});
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('airtime');
});

Route::post('/buy-airtime', function (Request $request) {
    return response()->json([
        'type' => 'airtime',
        'network' => $request->network,
        'phone' => $request->phone,
        'amount' => $request->amount,
        'status' => 'SUCCESS (API coming next)'
    ]);
});

Route::post('/buy-data', function (Request $request) {
    return response()->json([
        'type' => 'data',
        'network' => $request->network,
        'phone' => $request->phone,
        'plan' => $request->plan,
        'status' => 'SUCCESS (API coming next)'
    ]);
});
