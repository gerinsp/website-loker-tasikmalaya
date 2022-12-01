@extends('layouts.main')

@section('container')

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
  </nav>
<div class="row mb-3 justify-content-center">
    <div class="col-md-6">
        <div class="card" style="border-radius: 5px">
            <div class="card-body">
                <form action="/blog">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @elseif (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                    @endif
                    <div class="input mb-3">
                        <input type="text" class="form-control" placeholder="Cari Loker..." name="search" style="border: none;">
                        
                      </div>
                      <div class="d-flex justify-content-end float-end">
                        <button class="btn text-white" style="background-color: rgb(45 62 80)" type="submit" style="border-radius: 10px">Cari sekarang</button>
                      </div>
                      <ul class="list-inline">
                        <li class="list-inline-item"><div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Full Time
                            </label>
                          </div>
                        </li>
                        <li class="list-inline-item"><div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Part Time
                            </label>
                          </div>
                        </li>
                        <li class="list-inline-item"><div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Freelance
                            </label>
                          </div>
                        </li>
                      </ul>
                      
                 </form>
            </div>
          </div>
    </div>
</div>


 
@if ($post->count())
    @if ($pinned->count())
    <h3 class="mt-5 mb-3 text-center text-bold">Rekomendasi Lowongan</h3>
    <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center justify-content-center">
        @foreach ($pinned as $pin)
          <div class="col">
            <a href="/post/{{ $pin->slug }}" class="text-decoration-none text-dark">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-body">
                <i class="bi bi-pin float-end"></i>
                @if ($pin->status == "Butuh Cepat!")
                <h5 class="card-text text-danger text-start">{{ $pin->status }}</h5>
                @else
                <h5 class="card-text text-muted text-start">{{ $pin->status }}</h5>
                @endif
                <h4 class="card-title text-start">{{ $pin->posisi }}</h4>
              </div>
              @if ($pin->image)
                <div style="width: 200px">
                    <img class="image-fluid" src="{{ asset('storage/' . $pin->image) }}" alt="" srcset=""> 
                </div>
             @else
              <div class="justify-content-center">
                <img src="img/basic.png" style="width: 200px" class="card-img-top" alt="...">
              </div>
              @endif
              <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p class="card-text text-start"><i class="bi bi-buildings"></i> {{ $pin->company->company_name }}</p>
                    </li>
                    <li class="list-group-item">
                        <ul class="list-inline text-start">
                            <li class="list-inline-item"><i class="bi bi-mortarboard-fill"></i> {{ $pin->study->study }}</li>
                            <li class="list-inline-item"><i class="bi bi-smartwatch"></i> {{ $pin->status_kerja }}</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <p class="card-text text-start"><i class="bi bi-geo-alt"></i> {{ $pin->location->location }}</p>
                    </li>
                  </ul>
              </div>
            </div>
            </a>
          </div>
          @endforeach
        </div>
      </main>
      @endif
    <h3 class="mt-2 mb-3 text-bold">Lowongan Terbaru</h3>

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                @foreach ($post as $pos)
                <div class="col-md-12">
                    <a href="/post/{{ $pos->slug }}" class="text-decoration-none text-dark">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                @if ($pos->image)
                                    <div style="width: 200px">
                                        <img class="image-fluid" src="{{ asset('storage/' . $pos->image) }}" alt="" srcset=""> 
                                    </div>
                                @else
                                <img src="img/basic.png" style="width: 200px" class="card-img-top" alt="...">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-end float-end">
                                        <p class="card-text"><small class="text-muted"><i class="bi bi-alarm"></i> {{ $pos->created_at->diffForHumans() }}</small></p>
                                    </div>
                                    @if ($pos->status == "Butuh Cepat!")
                                    <h5 class="card-text text-danger">{{ $pos->status }}</h5>
                                    @else
                                    <h5 class="card-text text-muted">{{ $pos->status }}</h5>
                                    @endif
                                    <h4 class="card-title">{{ $pos->posisi }}</h4>
                                    <ul class="list-inline">
                                    <li class="list-inline-item"><p class="card-text"><i class="bi bi-buildings"></i> {{ $pos->company->company_name }}</p></li>
                                    <li class="list-inline-item"><p class="card-text"><i class="bi bi-cash-stack"></i> {{ $pos->gaji }}</p></li>
                                    </ul>
                                    <hr>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="bi bi-mortarboard-fill"></i> {{ $pos->study->study }}</li>
                                        <li class="list-inline-item"><i class="bi bi-smartwatch"></i> {{ $pos->status_kerja }}</li>
                                        <li class="list-inline-item"><i class="bi bi-geo-alt"></i> {{ $pos->location->location }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12 mb-3">
                        <div class="card" >
                            <div class="card-body">
                                <h3>Kategori</h3>
                                    <ul class="list-group list-group-flush">
                                        @foreach ($categories as $category)
                                        <li class="list-group-item">{{ $category->name }}</li>
                                        @endforeach
                                    </ul>
                            </div>
                        </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card" >
                        <div class="card-body">
                            <h3>Pendidikan</h3>
                                <ul class="list-group list-group-flush">
                                    @foreach ($studies as $study)
                                    <li class="list-group-item">{{ $study->study }}</li>
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card" >
                        <div class="card-body">
                            <h3>Lokasi</h3>
                                <ul class="list-group list-group-flush">
                                    @foreach ($locations as $location)
                                    <li class="list-group-item">{{ $location->location }}</li>
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
<p class="text-center fs-4">Tidak ada lowongan.</p>
@endif

<div class="d-flex">
    {{ $post->links() }}
</div>
@endsection
