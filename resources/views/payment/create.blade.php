@extends('layouts.main')

@section('container')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
          <li class="breadcrumb-item"><a href="/">Pasang Loker</a></li>
          <li class="breadcrumb-item"><a href="/payment">Pembayaran</a></li>
          <li class="breadcrumb-item"><a href="/payment">Instruksi Pembayaran</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
      </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Upload Bukti Pembayaran</h1>   
    </div>
    
    <div class="col-lg-8">
        <form method="post" action="/payment/instruksi/create" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="hidden" class="form-control" id="invoice" name="invoice" required autofocus value="#{{ mt_rand(100000, 1000000) }}">
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" id="payment_status" name="payment_status" required autofocus value="Waiting">
            </div>
            <div class="mb-3">
                <label for="payment_method" class="form-label">Metode Pembayaran</label>
                <select name="payment_method" id="" class="form-select">
                   <option value="Gopay">Gopay</option>
                   <option value="Ovo">Ovo</option>
                   <option value="Bank Bjb">Bank Bjb</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label ">Atas Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <button type="submit" class="btn btn-warning mt-3 mb-5">Kirim</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    
@endsection