@extends('layouts.main')

@section('container')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
      <li class="breadcrumb-item"><a href="/blog">Cari Loker</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
    </ol>
  </nav>
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h3 class="mb-3">{{ $post->title }}</h3>
            <p><i class="bi bi-buildings"></i> <a class="text-decoration-none" href="/authors/{{ $post->user->username }}">{{ $post->company_name }}</a> <i class="bi bi-tag"></i> <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            @if ($post->image)
            <div style="max-height: 100%; overflow: hidden;">
            <img style="width: 100%" class="image-fluid" src="{{ asset('storage/' . $post->image) }}" alt="" srcset=""> 
            </div>
            @else
            <img class="image-fluid" src="https://source.unsplash.com/700x400?{{ $post->category->name }}" alt="" srcset="">  
            @endif
            <article class="py-3">
                {!! $post->body !!}
                
            </article>
           
        <a href="/blog" class="btn btn-warning">Back to post</a>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-send"></i> Apply
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <li><a class="dropdown-item" href="https://wa.me/{{ $post->no_wa }}"><i class="bi bi-whatsapp"></i> Via WhatsApp</a></li>
              <li><a class="dropdown-item" href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to={{ $post->email }}"><i class="bi bi-envelope"></i></i> Via Email</a></li>
            </ul>
          </div>
        </div>
    </div>
</div>
        
@endsection