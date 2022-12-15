@extends('layouts.backend')
    
@section('content')

<div class="container text-center">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Requirements</h3>
      @include('backend/components/alerts')
    </div>
    <div class="card-body">
      <form action="{{ route('requirements.update', $requirement->id) }}" method="POST">
          @csrf
          @method('PATCH')
          <div class="mb-3">
            <label for="requirement_1" class="form-label">Requirement 1</label>
            <input type="text" class="form-control" id="requirement_1" name="requirement_1" aria-describedby="requirement_1_description" value="{{ $requirement->requirement_1 }}">
            <div id="requirement_1_description" class="form-text">
              Requirement 1
            </div>
          </div>
          <div class="mb-3">
            <label for="requirement_2" class="form-label">Requirement 2</label>
            <input type="text" class="form-control" id="requirement_2" name="requirement_2" aria-describedby="requirement_2_description" value="{{ $requirement->requirement_2 }}">
            <div id="requirement_2_description" class="form-text">
              Requirement 2
            </div>
          </div>
          <div class="mb-3">
            <label for="requirement_3" class="form-label">Requirement 3</label>
            <input type="text" class="form-control" id="requirement_3" name="requirement_3" aria-describedby="requirement_3_description" value="{{ $requirement->requirement_3 }}">
            <div id="requirement_3_description" class="form-text">
              Requirement 3
            </div>
          </div>
          <div class="mb-3">
            <label for="requirement_4" class="form-label">Requirement 4</label>
            <input type="text" class="form-control" id="requirement_4" name="requirement_4" aria-describedby="requirement_4_description" value="{{ $requirement->requirement_4 }}">
            <div id="requirement_4_description" class="form-text">
              Requirement 4
            </div>
          </div>
          <div class="mb-3">
            <label for="requirement_5" class="form-label">Requirement 5</label>
            <textarea class="form-control" id="requirement_5" name="requirement_5" aria-describedby="requirement_5_description">
              {{ $requirement->requirement_5 }}
            </textarea>
            <div id="requirement_5_description" class="form-text">
              Requirement 5
            </div>
          </div>
                 
          <button type="submit" class="btn btn-primary float-end">
            Update
          </button>
        </form>
    </div>
    <div class="card-footer">
      
    </div>
  </div>
</div>

@endsection