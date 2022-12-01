@extends('layouts.main')

@section('container')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">LokerTasikmalaya</a></li>
      <li class="breadcrumb-item"><a href="/blog">Cari Loker</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $post->posisi }}</li>
    </ol>
  </nav>
<div class="container mt-5">
    <div class="row mb-5">
        <div class="col-md-8">
            @if ($post->image)
                <div style="width: 150px" class="justify-content-end d-flex float-end mt-4">
                  <img class="image-fluid" src="{{ asset('storage/' . $post->image) }}" alt="" srcset=""> 
                </div>
            @else
                <div class="justify-content-end d-flex float-end mt-4">
                  <img src="../img/basic.png" style="width: 150px" class="card-img-top" alt="...">
                </div>
            @endif
            <h3 class="mt-5">{{ $post->company->company_name  }}</h3>
            <h5 class="text-muted">Membuka Lowongan</h5>
            <h2><b>{{ $post->posisi }}</b></h2>
            <hr style="width: 700px">
            <p>{!! $post->company->company_desc !!}</p>
            <hr style="width: 700px">
            <h4>Ringkasan</h4>
            <table border="0">
              <tbody>
                <tr>
                  <td width="200px">Pendidikan</td>
                  <td>: {{ $post->study->study }}</td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>: {{ $post->gender }}</td>
                </tr>
                <tr>
                  <td>Umur</td>
                  <td>: Min 22 Tahun</td>
                </tr>
                <tr>
                  <td>Status Kerja</td>
                  <td>: {{ $post->status_kerja }}</td>
                </tr>
                <tr>
                  <td>Besaran Gaji</td>
                  <td>: {{ $post->gaji }}</td>
                </tr>
                <tr>
                  <td>Batas Lamaran</td>
                  <td>: 2 Desember</td>
                </tr>
                <tr>
                  <td>Lokasi</td>
                  <td>: {{ $post->company->alamat }}</td>
                </tr>
              </tbody>
            </table>
            <hr style="width: 700px">
            <h4>Kualifikasi</h4>
            <p>{!! $post->kualifikasi !!}</p>
            <hr style="width: 700px">
            <h4>Deskripsi</h4>
            <p>{!! $post->deskripsi !!}</p>
            <hr style="width: 700px">
            <h4>Kirim Lamaran</h4>
            <table border="0">
              <tbody>
                <tr>
                  <td width="200px">Email</td>
                  <td>: {{ $post->company->email }}</td>
                </tr>
                <tr>
                  <td>No. WA</td>
                  <td>: {{ $post->company->no_wa }}</td>
                </tr>
                <tr>
                  <td>Formulir</td>
                  <td>: {{ $post->company->formulir }}</td>
                </tr>
              </tbody>
            </table>
            <div class="mt-3">
              <div class="d-flex justify-content-end float-end">
                <ul class="list-inline ">
                  <li class="list-inline-item">
                    <p class="card-text"><small class="text-muted"><i class="bi bi-alarm"></i> Created {{ $post->created_at->diffForHumans() }}</small></p>
                  </li>
                  <li class="list-inline-item">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <p class="text-danger"><i class="bi bi-info-circle"></i> Lapor</p>
                  </a>
                  </li>
                </ul>
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


              <div class="btn-group" role="group">
                <button style="background-color: rgb(45 62 80)" id="btnGroupDrop1" type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-send"></i> Apply
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <li><a class="dropdown-item" href="https://wa.me/{{ $post->company->no_wa }}"><i class="bi bi-whatsapp"></i> Via WhatsApp</a></li>
                  <li><a class="dropdown-item" href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to={{ $post->company->email }}"><i class="bi bi-envelope"></i></i> Via Email</a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-5">
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
                    <div class="card-body">
                        <h3>Pendidikan</h3>
                            <ul class="list-group list-group-flush">
                                @foreach ($studies as $study)
                                <li class="list-group-item">{{ $study->study }}</li>
                                @endforeach
                            </ul>
                    </div>
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
</div>

@endsection