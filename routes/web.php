use Illuminate\Http\Request;

Route::get('/airtime', function () {
    return view('airtime');
});

Route::post('/buy-airtime', function (Request $request) {
    return response()->json([
        'network' => $request->network,
        'phone' => $request->phone,
        'amount' => $request->amount,
        'status' => 'Form received'
    ]);
});<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Airtime API is running'
    ]);
});
