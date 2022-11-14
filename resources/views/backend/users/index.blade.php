@extends('layouts.backend')

@section('content')

@include('backend/components/alerts')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">LinkedIn Profile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">1</th>
      <td>{{ $user->last_name }}</td>
      <td>
        <a href="//{{ $user->linked_in }}" target="_blank">
          Linked In Profile
        </a>
      </td>
      <td>
        @can('is-admin')
        <button class="btn btn-sm btn-success">Activate</button>
        <button class="btn btn-sm btn-warning">Deactivate</button>

        <button type="button" class="btn btn-sm btn-outline-info" data-coreui-toggle="modal" data-coreui-target="#create-role">
          <i class="fas fa-pen">Assign Role</i>
        </button>
        @endcan

        <!-- Assign Role Modal -->
        <div class="modal fade" id="create-role" tabindex="-1" aria-labelledby="RoleLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="RoleLabel">Assign {{ $user->last_name }} a New Role</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                  @csrf
                  @method('PATCH')
                  <div class="mb-3">
                    @foreach($roles as $role)
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <label for="{{ $role->name }}" class="form-check-label">
                      {{ $role->name }}
                    </label>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id }}" id="{{ $role->name }}" 
                      @isset($user) 
                        @if(in_array($role->id, $user->roles->pluck('id')->toArray()))
                          checked 
                        @endif 
                      @endisset >
                    </div>
                    <div id="roleDescription" class="form-text">
                      Role Description
                      <hr>
                    </div>
                    @endforeach
                  </div>
                         
                  <button type="submit" class="btn btn-primary">
                    Assign Role
                  </button>
                </form>
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button> -->
              </div>
            </div>
          </div>
        </div>
        <!--End  Assign Role Modal -->
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection