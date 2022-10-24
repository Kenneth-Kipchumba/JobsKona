@extends('layouts.backend')
    
@section('content')

<div class="row">
  @foreach($listings as $listing)
  <div class="col-sm-6 col-lg-4">
    <div class="card mb-4">
      <div class="card-header">
        <h4>{{ $listing->title }}</h4>
        <p>
          Posted on: 
          <span class="badge bg-primary">
            <?= date('D - d/m/Y H:i', strtotime($listing->created_at)) ?>
          </span>
        </p>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <span class="badge bg-secondary">
              20 Slots
            </span>
          </div>
          <div class="col">
            <img src="" alt="Company Logo" class="ml-0">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="text-sm">{{ $listing->description }}</p>
          </div>
          <div class="col">
            <ul class="list-group">
              <li class="list-group-item">Company :</li>
              <li class="list-group-item">
                <?php
                $csvtags = explode(',', $listing->tags);
                ?>
                <ul>
                  @foreach($csvtags as $tags)
                  <li>
                    <a href="{{ url('listings') }}/?tag={{$tags}}">
                      {{ $tags }}
                    </a>
                  </li>
                  @endforeach
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button>Apply Now</button>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="row">
    <div class="col-sm-6 col-lg-4">
    <div class="card mb-4" style="--cui-card-cap-bg: #4875b4">
    <div class="card-header position-relative d-flex justify-content-center align-items-center">
    <svg class="icon icon-3xl text-white my-4">
    <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-linkedin"></use>
    </svg>
    <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
    <canvas id="social-box-chart-3" height="90"></canvas>
    </div>
    </div>
    <div class="card-body row text-center">
    <div class="col">
    <div class="fs-5 fw-semibold">500+</div>
    <div class="text-uppercase text-medium-emphasis small">contacts</div>
    </div>
    <div class="vr"></div>
    <div class="col">
    <div class="fs-5 fw-semibold">292</div>
    <div class="text-uppercase text-medium-emphasis small">feeds</div>
    </div>
    </div>
    </div>
    </div>
  </div>


<div class="container">
  
</div>

@endsection