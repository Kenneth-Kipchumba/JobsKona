@extends('layouts.backend')
    
@section('content')

<div class="container text-center">
  <div class="row mb-4">
    <div class="col-10">
      @if($errors->any())
        <div class="alert alert-danger">
          <p>
            Job Not Edited For the following reasons :
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
    <div class="col-2 text-end">
      <!-- <button type="button" class="btn btn-outline-success" data-coreui-toggle="modal" data-coreui-target="#job-listing-create">
        Post Job
      </button> -->
    </div>
  </div>
</div>


<div class="card mb-4">
      <div class="card-header">
        <div class="row">
        	<div class="col-8">
        		<h4>{{ $listing->title }}</h4>
		        <p>
		          Posted on: 
		          <span class="badge bg-primary">
		            <?= date('D - d/m/Y H:i', strtotime($listing->created_at)) ?>
		          </span>
		        </p>
        	</div>
          <div class="col-2">
            <button title="Click to see job requirements" type="button" class="btn btn-sm btn-outline-info" data-coreui-toggle="modal" data-coreui-target="#requirements">
              <i class="fas fa-list"></i>
              Requirements
            </button>
          </div>
        	<div class="col-2 text-end">
            @can('is-recruiter')
        		<button type="button" class="btn btn-sm btn-ghost-info" data-coreui-toggle="modal" data-coreui-target="#edit">
        			<i class="fas fa-trash"></i>
		        	Edit
		        </button>
		        <button type="button" class="btn btn-sm btn-ghost-danger" data-coreui-toggle="modal" data-coreui-target="#delete">
		        	<i class="fas fa-trash"></i>
		        	Delete
		        </button>
            @endcan
        	</div>
        </div>
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
              <li class="list-group-item">
                LT : Ksh.{{ $listing->lt }} per day
              </li>
              <li class="list-group-item">
                Wage : Ksh.{{ $listing->wage }} per successful task
              </li>
              <!-- Only Recruiter and Admin Should see this -->
              <li class="list-group-item">
                Project Cost : 
                <mark>
                  Ksh.{{ ($listing->wage + $listing->lt) }} per successful task per Agent
                </mark>
              </li>
              <!-- End Only Recruiter and Admin Should see this -->
              <!-- Ensure to check properly if its equal or greater than 1 -->
              <?php
                $csvtags = explode(',', $listing->tags);
              ?>
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
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button>Apply Now</button>
      </div>
    </div>

<!--Edit Modal -->
<div class="modal fade" id="edit" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Edit This Job Listing.
        </h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('listings.update', $listing->id) }}" multiple>
          @csrf
          @method('PATCH')
          <div class="mb-3">
            <label for="title" class="form-label">
              Job Title
            </label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="title" value="{{ $listing->title }}">
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
                {{ $listing->description }}
              </textarea>
            <div id="description" class="form-text">
              Job Requirements e.t.c
            </div>
          </div>

          <div class="mb-3">
            <label for="slots" class="form-label">
              Slots
            </label>
            <input type="number" class="form-control" name="slots" id="slots" aria-describedby="slots" value="{{ $listing->slots }}">
            <div id="slots" class="form-text">
              Number of slots
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Edit Modal -->


<!--Delete Modal -->
<div class="modal fade" id="delete" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Delete This Job Listing ?
        </h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('listings.destroy', $listing->id) }}">
        	@csrf
        	@method('DELETE')
        	<button onclick="confirm('Are you sure ?')" type="submit" class="btn btn-outline-danger">
        		<i class="fas fa-trash"></i>
        		Delete
        	</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Delete Modal -->

<!--Requirements Modal -->
<div class="modal fade" id="requirements" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Job Requirements
        </h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if(count($requirements) == 0)
          @can('is-recruiter')
            <a href="{{ route('requirements.create') }}" class="btn btn-outline-success btn-sm">
              Add Them ?
            </a>
          @endcan
        @endif


        <ul class="list-group">
          @if($requirements)
            @foreach($requirements as $requirement)
            @can('is-recruiter')
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="{{ route('requirements.edit', $requirement->id) }}" class="btn btn-ghost-info btn-sm">
                Edit
                <i class="fas fa-pen"></i>
              </a>

              <form method="POST" action="{{ route('requirements.destroy', $requirement->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-ghost-danger btn-sm btn-block">
                  <i class="fas fa-trash"></i>
                  Remove
                </button>
              </form>
            </div>
            @endcan
            <hr>
            @if($requirement->requirement_1)
              <li class="list-group-item">
                  {{ $requirement->requirement_1 }}
              </li>
            @endif
            @if($requirement->requirement_2)
              <li class="list-group-item">
                  {{ $requirement->requirement_2 }}
              </li>
            @endif
            @if($requirement->requirement_3)
              <li class="list-group-item">
                  {{ $requirement->requirement_3 }}
              </li>
            @endif
            @if($requirement->requirement_4)
              <li class="list-group-item">
                  {{ $requirement->requirement_4 }}
              </li>
            @endif
            @if($requirement->requirement_5)
              <li class="list-group-item">
                  {{ $requirement->requirement_5 }}
              </li>
            @endif
            @endforeach
          @endif
        </ul>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- End Requirements Modal -->


@endsection