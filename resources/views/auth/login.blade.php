@extends('layouts.auth')

@section('content')

<div class="bg-light min-vh-100 d-flex flex-row align-items-center dark:bg-transparent">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
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
                      <button class="btn btn-link px-0" type="button"></button>
                      <a href="{{ route('password.request') }}" class="btn btn-link px-0">
                        Forgot password?
                      </a>
                    </div>
                  </div>
              </div>
            </form>
            </div>
            <?php if(session('success')) : ?>
              <div class="card col-md-5 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                      @include('backend.components.alerts')
                  </div>
                </div>
              </div>
            <?php elseif(session('status')) : ?>
            <div class="card col-md-5 text-white bg-primary py-5">
              <div class="card-body text-center">
                <div>
                  @include('backend.components.alerts')
                </div>
              </div>
            </div>
            
            <?php else : ?>
            <div class="card col-md-5 text-white bg-primary py-5">
              <div class="card-body text-center">
                <div>
                  <h1 style="text-decoration: underline;">Sign up</h1>
                  <hr class="mb-3">
                  <p>New To <strong>{{ config('app.name') }}</strong> ?</p>
                  <p>Sign up today.</p>
                  <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-3">Register Now!</a>
                </div>
              </div>
              </div>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection