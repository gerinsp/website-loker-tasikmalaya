<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;

class AdminPaymentController extends Controller
{
    public function index()
    {
        return view('dashboard.payments.index', [
            'payments' => Payment::all()
        ]);
    }

    public function edit(Payment $payment)
    {
        return view('dashboard.payments.edit', [
            'payments' => $payment
        ]);
    }

    public function update(Request $request, Payment $payment)
    {
        $validatedData = $request->validate([
            'payment_status' => ['required']
        ]);
        
        Payment::where('id', $payment->id)->update($validatedData);

        return redirect('/dashboard/payments/')->with('success', 'Status pembayaran berhasil diubah');

    }
}
