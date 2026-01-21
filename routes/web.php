<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirtimeController;

Route::get('/', [AirtimeController::class, 'index']);
Route::post('/buy-airtime', [AirtimeController::class, 'buy']);
