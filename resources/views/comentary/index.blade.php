@extends('layouts.main')

@section('container')

      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
          <li class="breadcrumb-item active" aria-current="page">Komunitas</li>
          <li class="breadcrumb-item active" aria-current="page">Postingan</li>
          <li class="breadcrumb-item active" aria-current="page">Komentar</li>
        </ol>
      </nav>

      {{-- toash --}}

      @if(session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif

      <div class="card mb-3 mt-4">
        <div class="card-body mt-2">
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
            <a href="" class="text-decoration-none text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="25px" class="mt-1" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
              </svg>
              Komentar
            </a>
        </div>
      </div>

    <div class="row d-flex justify-content-end">
        <div class="col-md-11">
        @foreach ($comentaries as $comentary)
        <div class="card mb-3 mt-4">
            <div class="card-body mt-2">
            <h5 class="card-text">
                <img src="../img/user.png" style="width: 50px" alt=""> <small>{{ $comentary->user->name }}</small> <small class="text-muted">membalas</small> <small>{{ $comentary->comunityPost->user->name }}</small> • <small class="text-muted fs-6 ">{{ $comentary->created_at->diffForHumans() }}</small></h5>
            <p class="card-text">{!! $comentary->comment !!}</p>
            </div>
            
            <div class="card-footer bg-white">
                <a href="" class="text-decoration-none text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="25px" class="mt-1" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                </svg>
                Balas
                </a>
            </div>
        </div>
        <div class="row d-flex justify-content-end">
          <div class="col-md-11">
            @foreach ($replays->where('comentary_id', $comentary->id) as $reply)
            <div class="card mb-3 mt-4">
              <div class="card-body mt-2">
              <h5 class="card-text">
                  <img src="../img/user.png" style="width: 50px" alt=""> <small>{{ $reply->user->name }}</small> <small class="text-muted">membalas</small> <small>{{ $reply->comentary->user->name }}</small> • <small class="text-muted fs-6 ">{{ $reply->created_at->diffForHumans() }}</small></h5>
              <p class="card-text">{!! $reply->comment !!}</p>
              </div>
              
              <div class="card-footer bg-white">
                  <a href="" class="text-decoration-none text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25px" class="mt-1" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                      <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                      <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                  Balas
                  </a>
              </div>
          </div>
          @endforeach
        </div>
      </div>    
        @endforeach
        </div>
    </div>
    
    
      {{-- @foreach ($comentaries as $comentary) --}}
      
      {{-- @endforeach --}}
      
      
@endsection
