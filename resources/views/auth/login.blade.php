@extends('layouts.auth')

@section('content')

<div class="bg-light min-vh-100 d-flex flex-row align-items-center dark:bg-transparent">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-group d-block d-md-flex row">
          <div class="card col-md-7 p-4 mb-0">
            <form action="{{ route('login') }}" method="POST" class="needs-validation">
              @csrf
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-medium-emphasis">Sign In to your account</p>
                <div class="input-group mb-4">
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
                <div class="input-group mb-4">
                  <span class="input-group-text">
                    <i class="fas fa-lock"></i>
                  </span>
                  <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="input-group mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Remember me ?
                    </label>
                  </div>
                </div>

                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="submit">Login</button>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0" type="button">Forgot password?</button>
                    </div>
                  </div>
              </div>
            </form>
              </div>
              <div class="card col-md-5 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>Sign up</h2>
                    <p>Welcome To Jobs Kona. Sign up if you are new.</p>
                    <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-3">Register Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection