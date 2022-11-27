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
              Status Detail
              @if ($payments->payment_status === "Sukses")
                <div class="d-flex justify-content-end float-end">
                  <span class="badge bg-primary">{{ $payments->payment_status }}</span>
                </div>
              @endif

              @if ($payments->payment_status === "Gagal")
                <div class="d-flex justify-content-end float-end">
                  <span class="badge bg-danger">{{ $payments->payment_status }}</span>
                </div>
              @endif

              @if ($payments->payment_status === "Waiting")
                <div class="d-flex justify-content-end float-end">
                  <span class="badge bg-secondary">{{ $payments->payment_status }}</span>
                </div>
              @endif
              
            </div>
            <div class="card-body">
              <h5 class="card-title">Invoice : {{ $payments->invoice }}</h5>
              <p class="card-text">Atas Nama : {{ $payments->name }}</p>
              <p class="card-text">Metode Pembayaran : {{ $payments->payment_method }}</p>
              <p class="card-text">Bukti Pembayaran : </p>
              <img style="width: 200px;" src="{{ asset('storage/' . $payments->image) }}" alt="" srcset="">
              <br>
              <form action="/dashboard/payments/{{ $payments->id }}" method="post" class="d-inline">
                @method('put')
                @csrf
                <div class="mt-4 col-md-5">
                  <label for="payment_status" class="form-label">Status Pembayaran</label>
                  <select name="payment_status" id="" class="form-select">
                      @if(old('payment_status', $payments->payment_status) === "Waiting")
                          <option value="{{ $payments->payment_status }}" selected>{{ $payments->payment_status }}</option>
                          <option value="Failed">Failed</option>
                          <option value="Sukses">Sukses</option>
                      @elseif(old('payment_status', $payments->payment_status) === "Failed")
                          <option value="{{ $payments->payment_status }}" selected>{{ $payments->payment_status }}</option>
                          <option value="Waiting">Waiting</option>
                          <option value="Sukses">Sukses</option>
                      @else
                          <option value="{{ $payments->payment_status }}" selected>{{ $payments->payment_status }}</option>
                          <option value="Waiting">Waiting</option>
                          <option value="Failed">Failed</option>
                      @endif
                  </select>
              </div>
                <button class="btn btn-danger justify-content-end mt-3" onclick="return confirm('Are you sure?')">Update Status Pembayaran</button>
              </form>
            </div>
          </div>  
      </div>
  </div>
  
@endsection