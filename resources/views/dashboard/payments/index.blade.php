@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Payment</h1>   
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-5" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-5">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Invoice</th>
          <th scope="col">Nama</th>
          <th scope="col">Detail</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($payments as $payment)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td><?= $payment->invoice ?></td>
            <td><?= $payment->name ?></td>
            <td>
                <a href="/dashboard/payments/{{ $payment->id }}/edit" class="badge btn-info"><span data-feather="eye"></span></a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection