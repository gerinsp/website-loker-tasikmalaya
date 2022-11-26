@extends('layouts.main')

@section('container')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
    <li class="breadcrumb-item active" aria-current="page">Category</li>
  </ol>
</nav>
<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-3">
            <a href="/blog?category={{ $category->slug }}">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
