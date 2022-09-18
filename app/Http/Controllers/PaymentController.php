<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function submitPayment()
    {
        return view('payment.make-payment');
    }

    public function makePayment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        return 'Your payment processed successfully';
    }
}
