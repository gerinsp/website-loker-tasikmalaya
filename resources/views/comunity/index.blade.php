@extends('layouts.main')

@section('container')

      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
          <li class="breadcrumb-item active" aria-current="page">Komunitas</li>
        </ol>
      </nav>

      {{-- toash --}}

      @if(session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h4 class="display-6 fw-normal">Selamat datang di komunitas, {{ auth()->user()->name }}</h4>
        <p class="fs-5 text-muted">Disini kamu bisa gabung komunitas, posting sesuatu, berbagi pengalaman maupun berdiskusi dengan orang lain mengenai pekerjaan, lowongan, ataupun bertanya hal lainnya.</p>
      </div>
      <br>
      <h4>Gabung Komunitas</h4>
      <hr>
      <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          @foreach ($comunities as $comunity)
          <a class="text-decoration-none text-dark" href="/comunity/{{ $comunity->id }}">
          <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="../img/city.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-start">{{ $comunity->name }}</h5>
                      <p class="card-text text-muted text-start">{{ $comunity->user->count() }} Anggota</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </a>
          @endforeach
      </main>
      <h4>Postingan Terbaru</h4>
      <hr>
      @foreach ($comunityPosts as $comunityPost)
      <div class="card mb-3">
        <div class="card-header bg-white">
          <a href="/comunity/{{ $comunityPost->comunity->id }}"><h6 class="float-end justify-content-end mt-1">Lihat Komunitas</h6></a>
          <h5 class="mt-1">Komunitas {{ $comunityPost->comunity->name }}</h5>
      </div>
      <div class="card-body">
        <h5 class="card-text">
          <img src="../img/user.png" style="width: 50px" alt=""> {{ $comunityPost->user->name }} • <small class="text-muted fs-6 ">{{ $comunityPost->created_at->diffForHumans() }}</small></h5>
          <h5 class="mt-3 card-title">{{ $comunityPost->title }}</h5>
        <p class="card-text">{!! $comunityPost->body !!}</p>
      </div>
      
      <div class="card-footer bg-white">
          <div class="float-end justify-content-end">
              <li class="list-inline-item mt-1">
                  <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <p class="text-danger"><i class="bi bi-info-circle"></i> Laporkan Postingan</p>
                </a>
          </div>
          <a href="/comentary/{{ $comunityPost->id }}" class="text-decoration-none text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" class="mt-1" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
              <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
              <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
            </svg>
            <span class="position-relative top-0 start-0 translate-middle badge rounded-pill bg-danger">
              {{ $comunityPost->comentary->count() + $comunityPost->comentary->count() }}+
              <span class="visually-hidden">unread messages</span>
            </span>
          </a>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Laporan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> 
      @endforeach
      
      
@endsection
