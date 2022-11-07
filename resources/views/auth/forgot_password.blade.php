@extends('layouts.auth')

@section('content')

<div class="bg-light min-vh-100 d-flex flex-row align-items-center dark:bg-transparent">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <form action="{{ url('forgot-password') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-2 text-start">
                        <a href="{{ url()->previous() }}" class="btn btn-warning" title="Go Back">
                          &laquo;
                        </a>
                      </div>
                      <div class="col-10">
                        <h2>Reset Password</h2>
                        <p class="text-medium-emphasis">
                          Password reset procedure will be sent to your email
                        </p>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                      </span>
                      <input class="form-control" type="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="row">
                      <div class="col text-end">
                          <button class="btn btn-primary px-4" type="submit">
                          <i class="fa-solid fa-paper-plane"></i>
                          Send
                          </button>
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