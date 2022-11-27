<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index', [
            'title' => 'Pembayaran',
            'active' => 'home'
        ]);
    }

    public function instruksi()
    {
        return view('payment.instruksi', [
            'title' => 'Instruksi pembayaran',
            'active' => 'home'
        ]);
    }

    public function create()
    {
        return view('payment.create', [
            'title' => 'Upload bukti pembayaran',
            'active' => 'home'
        ]);
    }

    public function store(Request $request, Payment $payment)
    {
        $validatedData = $request->validate([
            'invoice' => ['required'],
            'payment_method' => ['required'],
            'name' => ['required', 'max:225'],
            'image' => ['image', 'file', 'max:1024'],
            'payment_status' => ['required']
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        if($request->file('image')){
            if($payment->image){
                Storage::delete($payment->image);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Payment::create($validatedData);

        return redirect('/')->with('success', 'Terima kasih telah mengupload bukti pembayaran. Pembayaran anda akan kami validasi terlebih dahulu, dimohon untuk menunggu. Jika pembayaran berhasil, maka status akun akan berubah.');
    }
}
