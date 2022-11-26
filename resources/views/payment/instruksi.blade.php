@extends('layouts.main')

@section('container')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
          <li class="breadcrumb-item"><a href="/">Pasang Loker</a></li>
          <li class="breadcrumb-item"><a href="/payment">Pembayaran</a></li>
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
                <h4 class="my-0 fw-normal">Transfer Menggunakan <img style="width: 100px;" src="../img/gopay.png" alt="" srcset=""></h4>
              </div>
              <div class="card-body">
                {{-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1> --}}
                <ul class="list-unstyled mt-3 mb-4">
                    <p class="text-start">Langkah-langkah pembayaran :</p>
                    <ul class="text-start">
                        1. Buka aplikasi Gojek.<br>
                        2. Klik “Bayar” pada halaman utama aplikasi Gojek. <br>
                        3. Ketik nama atau nomor HP tujuan untuk transfer GoPay ke GoPay. <br>
                        4. Pengguna juga dapat memilih langsung dari daftar pilihan kontak. <br>
                        5. Masukkan nominal sebesar <b>Rp. 20.000,-</b> untuk upgrade ke akun <b>Pro</b> dan <b>Rp. 100.000,-</b> untuk upgrade ke akun <b>Pro Plus</b><br>, lalu klik “Konfirmasi”. <br>
                        6. Klik konfirmasi dan bayar<br>
                        7. Masukkan PIN GoPay. <br>
                        8. Jika transfer GoPay berhasil, akan muncul notifikasi. <br>
                        9. Riwayat transaksi tersedia di halaman aplikasi Gojek.<br>    </ul>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Transfer Menggunakan <img style="width: 100px;" src="../img/ovo.png" alt="" srcset=""></h4>
              </div>
              <div class="card-body">
                {{-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1> --}}
                <ul class="list-unstyled mt-3 mb-4">
                    <p class="text-start">Langkah-langkah pembayaran :</p>
                    <ul class="text-start">
                        1. Buka aplikasi OVO<br>
                        2. Klik menu Transfer yang ada di halaman depan<br>
                        3. Pilih transfer 'ke Sesama OVO'<br>
                        4.  Masukkan nomor hp tujuan atau bisa juga memasukkan nomor ponsel dari daftar kontak<br>
                        5. Masukkan nominal sebesar <b>Rp. 20.000,-</b> untuk upgrade ke akun <b>Pro</b> dan <b>Rp. 100.000,-</b> untuk upgrade ke akun <b>Pro Plus</b><br>
                        6. Isi pesan (opsional) lalu klik 'Lanjutkan'<br>
                        7. Masukkan kode keamanan atau security code akun OVO Anda<br>
                        8. Akan muncul pemberitahuan di layar apabila transfer berhasil dilakukan.<br>
                    </ul>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Transfer Menggunakan <img style="width: 90px;" src="../img/bjb.png" alt="" srcset=""></h4>
              </div>
              <div class="card-body">
                {{-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1> --}}
                <ul class="list-unstyled mt-3 mb-4">
                    <p class="text-start">Langkah-langkah pembayaran :</p>
                    <ul class="text-start">
                        <p>Via ATM Bank lain :</p>
                        1. Masukkan kartu ATM. <br>
                        2. Pilih Bahasa Indonesia dan masukkan PIN. Pilih "Menu lain". <br>
                        3. Pilih "Dari rekening tabungan". <br>
                        4. Lalu, pilih ke "Rekening bank lain". <br>
                        5. Masukkan angka 110 sebagai kode bank BJB dan diikuti dengan nomor rekening tujuan transfer. <br>
                        6. Masukkan nominal sebesar <b>Rp. 20.000,-</b> untuk upgrade ke akun <b>Pro</b> dan <b>Rp. 100.000,-</b> untuk upgrade ke akun <b>Pro Plus</b>.<br>
                        7. Cek kembali informasi transfer Anda, lalu klik “Ya” jika sudah benar. <br>
                        8. Jangan lupa ambil kartu ATM dari mesin.<br>
                    </ul>
                </ul>
              </div>
            </div>
          </div>
    
        
      </main>
      <a class="btn btn-warning" href="/payment/instruksi/create">Upload bukti transfer</a>
      
@endsection
