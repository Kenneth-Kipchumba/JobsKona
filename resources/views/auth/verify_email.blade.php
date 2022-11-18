@extends('layouts.auth')

@section('content')

<div class="bg-light min-vh-100 d-flex flex-row align-items-center dark:bg-transparent">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="card-group d-block d-md-flex row">
          <div class="card col-md-7 p-4 mb-0">
              <div class="card-body">
                <h1>Verify your email to proceed.</h1>
                <p class="text-medium-emphasis">
                  Check your email address
                </p>
                <hr>
                <form action="{{ route('verification.send') }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-primary">
                    Resend Verification Link
                  </button>
                </form>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection