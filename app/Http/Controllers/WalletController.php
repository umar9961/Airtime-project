<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function show(Request $request)
    {
        return response()->json([
            'wallet' => $request->user()->wallet
        ]);
    }
}<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    //
}
