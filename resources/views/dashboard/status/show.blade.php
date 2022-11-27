@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Payment Details</h1>   
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-5" role="alert">
    {{ session('success') }}
  </div>
  @endif

    <div class="row mb-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Keterangan
                </div>
                <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p class="{{ $active }}">{{ $judul }}</p> 
                    <p class="card-text fs-6">{{ $text }}</p>
                </blockquote>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-8">
        <div class="card">
            <div class="card-header">
              Details
              @if ($payment->payment_status === "Sukses")
                <div class="d-flex justify-content-end float-end">
                  <span class="badge bg-primary">{{ $payment->payment_status }}</span>
                </div>
              @endif

              @if ($payment->payment_status === "Gagal")
                <div class="d-flex justify-content-end float-end">
                  <span class="badge bg-danger">{{ $payment->payment_status }}</span>
                </div>
              @endif

              @if ($payment->payment_status === "Waiting")
                <div class="d-flex justify-content-end float-end">
                  <span class="badge bg-secondary">{{ $payment->payment_status }}</span>
                </div>
              @endif
            </div>
            <div class="card-body">
              <h5 class="card-title">Invoice : {{ $payment->invoice }}</h5>
              <p class="card-text">Atas Nama : {{ $payment->name }}</p>
              <p class="card-text">Metode Pembayaran : {{ $payment->payment_method }}</p>
              <p class="card-text">Bukti Pembayaran : </p>
              <img style="width: 200px;" src="{{ asset('storage/' . $payment->image) }}" alt="" srcset="">
            </div>
          </div>  
      </div>
  </div>
  
@endsection