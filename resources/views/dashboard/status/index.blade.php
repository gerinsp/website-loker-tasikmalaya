@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Status Akun</h1>   
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-5" role="alert">
    {{ session('success') }}
  </div>
  @endif

  @if ($user->akun_status === "Free")
  <div class="card">
    <div class="card-header">
      Status Detail
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Akun anda masih <b>Free</b>, silahkan upgrade agar mendapatkan fitur lebih banyak lagi.</p>
        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
      </blockquote>
    </div>
  </div>
  @endif

  @if ($user->akun_status === "Pro")
  <div class="card">
    <div class="card-header">
        Status Detail
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p><b class="text-success">Selamat pembayaran anda berhasil!</b> Akun anda sudah di upgrade ke akun <b>Pro</b>. Sekarang anda bisa posting lebih banyak lagi hingga <b>15 Kali</b>.</p>
        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
      </blockquote>
    </div>
  </div>
  @endif

  @if ($user->akun_status === "Pro Plus")
  <div class="card">
    <div class="card-header">
        Status Detail
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p><b class="text-success">Selamat pembayaran anda berhasil!</b> Akun anda sudah di upgrade ke akun <b>Pro Plus</b>. Sekarang anda bisa posting sepuasnya tanpa limit.</p>
        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
      </blockquote>
    </div>
  </div>
  @endif
  
@endsection