<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $response = Http::withToken(config('services.paystack.secret'))
            ->post('https://api.paystack.co/transaction/initialize', [
                'email' => $request->email,
                'amount' => $request->amount * 100,
                'callback_url' => url('/payment/success'),
            ]);

        return redirect($response['data']['authorization_url']);
    }

    public function success()
    {
        return redirect('/')->with('success', 'Payment successful. You can now buy airtime/data');
    }
}
