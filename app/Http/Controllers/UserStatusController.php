<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\Post;

class UserStatusController extends Controller
{
    public function index(User $user)
    {
        return view('dashboard.status.index', [
            'payments' => Payment::where('user_id', $user->id)->get(),
        ]);
    }

    public function show(Payment $payment)
    {
        if($payment->payment_status === "Waiting"){
            $judul = "Pembayaran anda sedang diproses!";
            $text = "Harap untuk menunggu beberapa saat.";
            $active = "text-secondary";
        }

        if($payment->payment_status === "Failed"){
            $judul = "Maaf pembayaran anda tidak valid!";
            $text = "Silahkan hubungi admin di nomor 085863865446 untuk pengembalian dana.";
            $active = "text-danger";
        }

        if($payment->payment_status === "Sukses" && $payment->user->akun_status === "Pro"){
            $judul = "Selamat Pembayaran anda berhasil!";
            $text = "Status akun anda sudah berubah menjadi akun Pro.";
            $active = "text-success";
        }

        if($payment->payment_status === "Sukses" && $payment->user->akun_status === "Pro Plus"){
            $judul = "Selamat Pembayaran anda berhasil!";
            $text = "Status akun anda sudah berubah menjadi akun Pro Plus.";
            $active = "text-success";
        }


        return view('dashboard.status.show', [
            'payment' => $payment,
            'judul' => $judul,
            'text' => $text,
            'active' => $active
        ]);
    }
}
