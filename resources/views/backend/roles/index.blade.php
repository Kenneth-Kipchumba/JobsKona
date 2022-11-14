@extends('layouts.backend')

@section('content')

<div class="row">
  <div class="col-12">
    <button type="button" class="btn btn-sm btn-outline-success" data-coreui-toggle="modal" data-coreui-target="#create-role">
      <i class="fas fa-pen">Create a new role</i>
    </button>
  @include('backend/components/alerts')
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Roles</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($roles as $role)
    <tr>
      <td>{{ $role->id }}</td>
      <td>{{ $role->name }}</td>
      <td>
        <button type="button" class="btn btn-sm btn-info" data-coreui-toggle="modal" data-coreui-target="#edit-{{ $role->id }}">
          <i class="fas fa-pen">Edit</i>
        </button>
        <button class="btn btn-sm btn-danger" data-coreui-toggle="modal" data-coreui-target="#delete-{{ $role->id }}">
          <i class="fas fa-trash">Delete</i>
        </button>

        <!-- Edit Modal -->
          <div class="modal fade" id="edit-{{ $role->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit {{ $role->name }} Role</h5>
                  <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                      <label for="name" class="form-label">Role Name</label>
                      <input type="text" class="form-control" id="name" aria-describedby="user_role">
                      <div id="user_role" class="form-text">
                        User Role
                      </div>
                    </div>
                 
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button> -->
                </div>
              </div>
            </div>
          </div>
        <!--End  Edit Modal -->

        <!-- Delete Modal -->
          <div class="modal fade" id="delete-{{ $role->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-danger">
                  <h5 class="modal-title" id="exampleModalLabel">You are about to Delete {{ $role->name }} Role</h5>
                  <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                 
                    <button type="submit" class="btn btn-outline-danger float-end">
                      Delete
                    </button>
                  </form>
                </div>
                <div class="modal-footer">
                  
                </div>
              </div>
            </div>
          </div>
        <!--End  Delete Modal -->
      </td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    {{ $roles->links() }}
  </tfoot>
</table>

<!-- Create Modal -->
<div class="modal fade" id="create-role" tabindex="-1" aria-labelledby="RoleLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RoleLabel">Create New Role</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Role</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="user_role">
            <div id="user_role" class="form-text">
              Role Name
            </div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" aria-describedby="role_description">
              
            </textarea>
            <div id="role_description" class="form-text">
              Role Description
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