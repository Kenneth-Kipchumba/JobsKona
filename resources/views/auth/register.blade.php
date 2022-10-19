@extends('layouts.auth')

@section('content')

<div class="bg-light min-vh-100 d-flex flex-row align-items-center dark:bg-transparent">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mb-4 mx-4">
          <div class="card-body p-4">
          <form action="{{ route('register') }}" method="POST" class="needs-validation">
            @csrf
            <h1 class="mb-3">Create your Account</h1>
            <p class="text-medium-emphasis">
              You are about to get there
            </p>

            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
              <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
              @error('first_name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
              <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
              @error('last_name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fas fa-envelope"></i>
              </span>
              <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fas fa-lock"></i>
              </span>
              <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Your Super Secret Password">
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fas fa-lock"></i>
              </span>
              <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirm Password">
              @error('password_confirmation')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="row">
              <div class="col">
                <button class="btn btn-block btn-primary" type="submit">
                  Register
                </button>
              </div>
              <div class="col-6 text-end">
                Already a member ?
                <a href="{{ route('login') }}" class="btn btn-link px-0">
                  Login
                </a>
              </div>
            </div>
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection