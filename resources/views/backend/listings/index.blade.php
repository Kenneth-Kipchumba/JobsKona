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
        <div class="row">
          <div class="col">
            <span class="badge bg-secondary">
              {{ $listing->slots }} Slots
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
            <label for="slots" class="form-label">
              Slots
            </label>
            <input type="number" class="form-control" name="slots" id="slots" aria-describedby="slots" value="{{ old('slots') }}">
            <div id="slots" class="form-text">
              Number of slots
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