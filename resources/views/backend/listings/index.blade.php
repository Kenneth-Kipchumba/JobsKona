@extends('layouts.backend')
    
@section('content')


<div class="container">
  @foreach($listings as $listing)
    <div class="card">
      <div class="card-header">
        <h2>{{ $listing->title }}</h2>
        <p>{{ $listing->created_at }}</p>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <p>{{ $listing->description }}</p>
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
  @endforeach
</div>

@endsection