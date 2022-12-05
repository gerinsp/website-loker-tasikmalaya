@extends('layouts.main')

@section('container')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
          <li class="breadcrumb-item"><a href="/">Cari Loker</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
      </nav>

      {{-- <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h4 class="display-6 fw-normal">Pasang Lowongan Anda di LokerTasikmalaya</h4>
        <p class="fs-5 text-muted">Jika anda sedang mencari kandidat terbaik untuk perusahaan anda, silahkan posting lowongan anda di sini. Saat ini kami sedang menyediakan fitur uji coba gratis yang tertera di bawah ini.</p>
      </div> --}}
      <main style="margin-top: 100px">
        <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Transfer (Cek Manual)</h4>
              </div>
              <div class="card-body">
                {{-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1> --}}
                <ul class="list-unstyled mt-3 mb-4">
                    <p class="text-start">Silahkan transfer dengan beberapa metode pembayaran dibawah ini.</p>
                    <img style="width: 100px" src="img/gopay.png" alt="" srcset="">
                    <img style="width: 100px" src="img/ovo.png" alt="" srcset="">
                    <img style="width: 80px" src="img/bjb.png" alt="" srcset="">
                    <br><br>
                    <small class="text-danger text-start" ><p>Note: Untuk lebih detailnya bisa melihat instruksi pembayaran.</p></small>
                </ul>
                <a href="/payment/instruksi" type="button" class="w-100 btn btn-lg btn-outline-primary">Lihat Instruksi</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-secondary">
              <div class="card-header py-3 bg-secondary border-secondary text-white">
                <h4 class="my-0 fw-normal">Transfer (Cek Otomatis)</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    Fitur belum tersedia saat ini, silahkan pilih transfer (cek manual).
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-secondary">Get started</button>
              </div>
            </div>
          </div>
         
        </div>
    
        
      </main>
      
@endsection
