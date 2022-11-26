@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User</h1>   
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-5" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-5">
    <a href="/dashboard/users/create" class="btn btn-warning mb-3">Add new user</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td><?= $user->name ?></td>
            <td>
                <a href="/dashboard/users/{{ $user->username }}/edit" class="badge btn-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/users/{{ $user->username }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection