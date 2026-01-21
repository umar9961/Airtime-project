<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $request->validate([
            'network' => 'required',
            'phone'   => 'required',
            'amount'  => 'required|numeric|min:50',
        ]);

        $wallet = Wallet::first();

        if (!$wallet || $wallet->balance < $request->amount) {
            return back()->with('error', 'Insufficient wallet balance');
        }

        $wallet->balance -= $request->amount;
        $wallet->save();

        return back()->with('success', 'Airtime purchase simulated successfully');
    }
}
