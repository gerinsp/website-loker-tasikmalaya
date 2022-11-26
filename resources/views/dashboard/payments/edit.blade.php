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

  <div class="row mb-5">
      <div class="col-md-8">
        <div class="card">
            <div class="card-header">
              Details
            </div>
            <div class="card-body">
              <h5 class="card-title">Invoice : {{ $payments->invoice }}</h5>
              <p class="card-text">Atas Nama : {{ $payments->name }}</p>
              <p class="card-text">Metode Pembayaran : {{ $payments->payment_method }}</p>
              <p class="card-text">Bukti Pembayaran : </p>
              <img style="width: 200px;" src="{{ asset('storage/' . $payments->image) }}" alt="" srcset="">
              <br>
              <a href="#" class="btn btn-secondary mt-4">Upgrade Pro</a>
              <a href="#" class="btn btn-warning mt-4">Upgrade Pro Plus</a>
              <a href="#" class="btn btn-danger justify-content-end mt-4">Tidak Valid</a>
            </div>
          </div>  
      </div>
  </div>
  
@endsection