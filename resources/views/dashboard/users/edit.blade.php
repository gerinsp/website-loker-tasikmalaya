@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Users</h1>   
    </div>
    
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/users/{{ $user->username }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label ">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label ">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username) }}">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label ">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label ">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required value="{{ old('password', $user->password) }}">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="akun_status" class="form-label">Status Akun</label>
                <select name="akun_status" id="" class="form-select">
                    @if(old('akun_status', $user->akun_status) === "Pro Plus")
                        <option value="{{ $user->akun_status }}" selected>{{ $user->akun_status }}</option>
                        <option value="Free">Free</option>
                        <option value="Pro">Pro</option>
                    @elseif(old('akun_status', $user->akun_status) === "Pro")
                        <option value="{{ $user->akun_status }}" selected>{{ $user->akun_status }}</option>
                        <option value="Free">Free</option>
                        <option value="Pro Plus">Pro Plus</option>
                    @else
                        <option value="{{ $user->akun_status }}" selected>{{ $user->akun_status }}</option>
                        <option value="Pro">Pro</option>
                        <option value="Pro Plus">Pro Plus</option>
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-warning mb-5">Update User</button>
        </form>
    </div>
@endsection