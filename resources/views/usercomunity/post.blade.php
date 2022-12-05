@extends('layouts.main')

@section('container')

      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
          <li class="breadcrumb-item active" aria-current="page">Postingan Saya</li>
        </ol>
      </nav>

      {{-- toash --}}

      @if(session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif

      @foreach ($comunityPosts as $comunityPost)
      <div class="card mb-3 mt-4">
        <div class="card-body mt-2">
          <h5 class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="37px" class="mt-0" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg> {{ $comunityPost->user->name }} • <small class="text-muted fs-6 ">{{ $comunityPost->created_at->diffForHumans() }}</small></h5>
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
                {{ $comunityPost->comentary->count() }}+
                <span class="visually-hidden">unread messages</span>
              </span>
            </a>
        </div>
      </div>
        @endforeach
      
@endsection
