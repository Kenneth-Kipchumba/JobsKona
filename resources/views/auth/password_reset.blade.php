@extends('layouts.auth')

@section('content')

<div class="bg-light min-vh-100 d-flex flex-row align-items-center dark:bg-transparent">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                <form method="POST" action="{{ url('reset-password') }}">
                  @csrf
                  <h1>Reset Password</h1>
                  <hr class="mb-4">
                  @if($errors->any)
                    @include('backend.components.alerts')
                  @endif
                  <input type="hidden" name="token" value="{{ request()->route('token') }}">
                  
                  <div class="input-group mb-3">
                    <span class="input-group-text">
                      <i class="fas fa-user"></i>
                    </span>
                    <input class="form-control" type="email" placeholder="Email" name="email">
                  </div>
                  <div class="input-group mb-4">
                    <span class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </span>
                    <input class="form-control" type="password" placeholder="Password" name="password">
                  </div>
                  <div class="input-group mb-4">
                    <span class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </span>
                    <input class="form-control" type="password" name="Password_confirmation" placeholder="Confirm Password">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="submit">Reset Password</button>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection