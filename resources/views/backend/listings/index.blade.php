@extends('layouts.backend')
    
@section('content')

<div class="container text-center">
  <div class="row mb-4">
    <div class="col">
      @if($errors->any())
        <div class="alert alert-danger">
          <p>
            Job Not Successfully Posted For the following reasons :
          </p>
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      @include('backend/components/alerts')
    </div>
    <div class="col text-end">
      @can('is-recruiter')
      <button type="button" class="btn btn-outline-success" data-coreui-toggle="modal" data-coreui-target="#job-listing-create">
        Post Job
      </button>
      @endcan
    </div>
  </div>
</div>

<div class="row">
  @foreach($listings as $listing)
  <div class="col-sm-6 col-lg-4">
    <div class="card mb-4">
      <div class="card-header">
        <a href="{{ route('listings.show', $listing->id) }}">
          <h4>{{ $listing->title }}</h4>
        </a>
        <p>
          Posted on: 
          <span class="badge bg-primary">
            <?= date('D - d/m/Y H:i', strtotime($listing->created_at)) ?>
          </span>
        </p>
      </div>
      <div class="card-body">
        <span class="badge bg-success">
          {{ $listing->slots }} Slots Remaining
        </span>
        <div class="row">
          <div class="col">
            <small>
              <?= Str::of($listing->description)->words(10, '...') ?>
            </small>
          </div>
          <div class="col">
            <?php
            $csvtags = explode(',', $listing->tags);
            ?>
            @if(count($csvtags) > 1)
            <ul class="list-group">
              <li class="list-group-item">
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
            @endif
          </div>
        </div>
      </div>
      @can('is-agent')
        <div class="card-footer">
          <a href="{{ route('listings.show', $listing->id) }}" class="btn">
            Apply Now
          </a>
        </div>
      @endcan
    </div>
  </div>
  @endforeach
</div>

  {{ $listings->links() }}

<!--Job Create Modal -->
<div class="modal fade" id="job-listing-create" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Create Job
        </h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('listings.store') }}" multiple>
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">
              Job Title
            </label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="title" value="{{ old('title') }}">
            <div id="title" class="form-text">
              e.g Call Center Agent
            </div>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">
              Job Description
            </label>
              <textarea class="form-control" id="description" name="description" rows="3">
                {{ old('description') }}
              </textarea>
            <div id="description" class="form-text">
              Job Requirements e.t.c
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col">
                <label for="tags" class="form-label">
                  Tag
                </label>

                <select class="form-multi-select" id="ms1" multiple data-coreui-search="true" name="tags[]">
                  <option value="Call Center" >Call Center</option>
                  <option value="Field">Field</option>
                  <option value="QC">QC</option>
                  <option value="Supervisor">Supervisor</option>
                </select>

                <div id="tags" class="form-text">
                  ...
                </div>
              </div>
              <div class="col">
                <label for="lt" class="form-label">
                 LT
                </label>
                <input type="number" class="form-control" name="lt" id="lt" aria-describedby="lt" value="{{ old('lt') }}">
                <div id="lt" class="form-text">
                  Local Transport
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col">
                <label for="slots" class="form-label">
                  Slots
                </label>
                <input type="number" class="form-control" name="slots" id="slots" aria-describedby="slots" value="{{ old('slots') }}">
                <div id="slots" class="form-text">
                  Number of slots
                </div>
              </div>
              <div class="col">
                <label for="wage" class="form-label">
                 Wage
                </label>
                <input type="number" class="form-control" name="wage" id="wage" aria-describedby="wage" value="{{ old('wage') }}">
                <div id="wage" class="form-text">
                  Wage per task
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col">
                <label for="start_date" class="form-label">
                  Start Date
                </label>
                <input type="date" id="start_date" name="start_date" class="form-control">
              </div>
              <div class="col">
                <label for="end_date" class="form-label">
                  End Date
                </label>
                <input type="date" id="end_date" name="end_date" class="form-control">
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary float-end">
            Post
          </button>
        </form>
      </div>
      <div class="modal-footer">
        
    </div>
  </div>
</div>
<!-- End Job Create Modal -->


@endsection