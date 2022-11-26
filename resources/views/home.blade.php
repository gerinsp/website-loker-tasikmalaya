@extends('layouts.main')

@section('container')

      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
          <li class="breadcrumb-item active" aria-current="page">Halaman Home</li>
        </ol>
      </nav>
      @if(session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h4 class="display-6 fw-normal">Pasang Lowongan Anda di LokerTasikmalaya</h4>
        <p class="fs-5 text-muted">Jika anda sedang mencari kandidat terbaik untuk perusahaan anda, silahkan posting lowongan anda di sini. Tersedia juga fitur <b>Free</b>, <b>Pro</b>, dan <b>Pro Plus</b> yang disesuaikan berdasarkan kebutuhan anda.</p>
      </div>
      <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp.0<small class="text-muted fw-light">/bln</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    Posting gratis saat pertama kali mendaftar <br>(Maksimal 3 Kali Posting)
                </ul>
                <a href="/register" type="button" class="w-100 btn btn-lg btn-outline-primary">Coba Gratis</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-secondary">
              <div class="card-header py-3 bg-secondary border-secondary text-white">
                <h4 class="my-0 fw-normal">Upgrade Pro</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp.20K<small class="text-muted fw-light">/bln</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    Dapatkan jumlah postingan lebih banyak jika mengupgrade ke akun <b>Pro</b><br>
                  (Maksimal 15 Postingan)
                </ul>
                @auth
                <a href="/payment" type="button" class="w-100 btn btn-lg btn-secondary">Upgrade Pro</a>
                @else
                <a href="/register" type="button" class="w-100 btn btn-lg btn-secondary">Upgrade Pro</a>
                @endauth
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-warning">
              <div class="card-header py-3 bg-warning border-warning">
                <h4 class="my-0 fw-normal">Upgrade Pro Plus</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp.100K<small class="text-muted fw-light">/bln</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    Hanya dengan mengupgrade ke akun <b>Pro Plus</b> Anda bisa mendapatkan <b>Unlimited</b> postingan perbulannya, plus lowongan anda juga akan kami posting di instagram lokertasikmalaya. 
                </ul>
                @auth
                <a href="/payment" type="button" class="w-100 btn btn-lg btn-warning">Upgrade Pro Plus</a>
                @else
                <a href="/register" type="button" class="w-100 btn btn-lg btn-warning">Upgrade Pro Plus</a>
                @endauth
              </div>
            </div>
          </div>
        </div>
    
        
      </main>
      
@endsection
