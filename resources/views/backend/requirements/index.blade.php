@extends('layouts.backend')

@section('content')

<div class="row">
  <div class="col-12">
    <button type="button" class="btn btn-sm btn-outline-success" data-coreui-toggle="modal" data-coreui-target="#create-requirement">
      <i class="fas fa-pen">Create Job Requirements</i>
    </button>
  @include('backend/components/alerts')
  </div>
</div>



<!-- Create Modal -->
<div class="modal fade" id="create-requirement" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="RoleLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RoleLabel">
          Create Job Requirements
        </h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          @csrf
          <!-- Ensure Job poster can only see their own jobs in the dropdown -->
          <div class="mb-3">
            <label for="single-select" class="form-label">
              Ensure to select the correct Job Listing that you want to add requirements for
            </label>
            <select class="form-multi-select @error('listing_id') invalid @enderror" name="listing_id" id="single-select" data-coreui-multiple="false">
              @if( ! $listings == null)
                @foreach($listings as $listing)
                  <option value="{{ $listing->id }}">
                    {{ $listing->title }}
                  </option>
                @endforeach
              @else
                <option value="">
                  {{ $listing->requirements->requirement_1 }}
                </option>
              @endif
            </select>
            <div id="requirement_1_description" class="form-text">
              Ensure to select the correct Job Listing that you want to add requirements for
            </div>
          </div>
          <div class="mb-3">
            <label for="requirement_1" class="form-label">Requirement 1</label>
            <input type="text" class="form-control" id="requirement_1" name="requirement_1" aria-describedby="requirement_1_description">
            <div id="requirement_1_description" class="form-text">
              Requirement 1
            </div>
          </div>
          <div class="mb-3">
            <label for="requirement_2" class="form-label">Requirement 2</label>
            <input type="text" class="form-control" id="requirement_2" name="requirement_2" aria-describedby="requirement_2_description">
            <div id="requirement_2_description" class="form-text">
              Requirement 2
            </div>
          </div>
          <div class="mb-3">
            <label for="requirement_3" class="form-label">Requirement 3</label>
            <input type="text" class="form-control" id="requirement_3" name="requirement_3" aria-describedby="requirement_3_description">
            <div id="requirement_3_description" class="form-text">
              Requirement 3
            </div>
          </div>
          <div class="mb-3">
            <label for="requirement_4" class="form-label">Requirement 4</label>
            <input type="text" class="form-control" id="requirement_4" name="requirement_4" aria-describedby="requirement_4_description">
            <div id="requirement_4_description" class="form-text">
              Requirement 4
            </div>
          </div>
          <div class="mb-3">
            <label for="requirement_5" class="form-label">Requirement 5</label>
            <textarea class="form-control" id="requirement_5" name="requirement_5" aria-describedby="requirement_5_description">
              
            </textarea>
            <div id="requirement_5_description" class="form-text">
              Requirement 5
            </div>
          </div>
                 
          <button type="submit" class="btn btn-primary float-end">
            Create
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>
<!--End  Edit Modal -->

@endsection