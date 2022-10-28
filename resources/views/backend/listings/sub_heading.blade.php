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
    </div>
    <div class="col text-end">
      <button type="button" class="btn btn-outline-success" data-coreui-toggle="modal" data-coreui-target="#staticBackdrop">
        Post Job
      </button>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Create Job
        </h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('listings.store') }}">
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

            <select class="form-multi-select" id="ms1" multiple data-coreui-search="true" name="tags">
              <option value="Call Center">Call Center</option>
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
              <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            <div id="description" class="form-text">
              Job Requirements e.t.c
            </div>
          </div>

          <div class="mb-3">
            <label for="slots" class="form-label">
              Slots
            </label>
            <input type="number" class="form-control" name="slots" id="slots" aria-describedby="slots">
            <div id="slots" class="form-text">
              Number of slots
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
