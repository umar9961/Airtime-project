
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    // Start payment (Paystack)
    public function pay(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:100',
        ]);

        $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
            ->post('https://api.paystack.co/transaction/initialize', [
                'email' => 'customer@example.com',
                'amount' => $request->amount * 100,
                'callback_url' => url('/payment/success'),
            ]);

        if (!$response->successful()) {
            return back()->with('error', 'Payment initialization failed');
        }

        return redirect($response['data']['authorization_url']);
    }

    // Payment success → fund wallet
    public function success()
    {
        $userId = 1; // temporary user (no auth yet)
        $amount = 1000; // test amount

        $wallet = DB::table('wallets')->where('user_id', $userId)->first();

        if ($wallet) {
            DB::table('wallets')
                ->where('user_id', $userId)
                ->update([
                    'balance' => $wallet->balance + $amount,
                ]);
        } else {
            DB::table('wallets')->insert([
                'user_id' => $userId,
                'balance' => $amount,
            ]);
        }

        return redirect('/')->with('success', 'Wallet funded successfully');
    }
}
