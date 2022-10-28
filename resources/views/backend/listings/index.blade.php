@extends('layouts.backend')
    
@section('content')

@include('backend/listings/sub_heading')

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

@endsection