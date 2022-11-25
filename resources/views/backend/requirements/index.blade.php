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
<div class="modal fade" id="create-requirement" tabindex="-1" aria-labelledby="RoleLabel" aria-hidden="true">
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
          <div class="mb-3">
            <label for="name" class="form-label">Requirement 1</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="user_role">
            <div id="user_role" class="form-text">
              Requirement 1
            </div>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Requirement 2</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="user_role">
            <div id="user_role" class="form-text">
              Requirement 2
            </div>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Requirement 3</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="user_role">
            <div id="user_role" class="form-text">
              Requirement 3
            </div>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Requirement 4</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="user_role">
            <div id="user_role" class="form-text">
              Requirement 4
            </div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Requirement 5</label>
            <textarea class="form-control" id="description" name="description" aria-describedby="role_description">
              
            </textarea>
            <div id="role_description" class="form-text">
              Requirement 5
            </div>
          </div>
                 
          <button type="submit" class="btn btn-primary">
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