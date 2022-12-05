@extends('layouts.main')

@section('container')

      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
          <li class="breadcrumb-item active" aria-current="page">Komunitas Saya</li>
        </ol>
      </nav>

      {{-- toash --}}

      @if(session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif

      
      @foreach ($comunityUsers as $comunityUser)
      <a class="text-decoration-none text-dark" href="/comunity/{{ $comunityUser->comunity->id }}">
      <div class="card mb-3" style="">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="../img/city.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h3 class="card-title">Komunitas {{ $comunityUser->comunity->name }}</h3>
              <p class="card-text"><small class="text-muted"><i class="bi bi-people"></i> {{ $comunityUser->comunity->user->count() }} Anggota</small></p>
              <p class="card-text">{{ $comunityUser->comunity->deskripsi }}</p>
            </div>
          </div>
        </div>
      </div>
      </a>
      @endforeach


@endsection
