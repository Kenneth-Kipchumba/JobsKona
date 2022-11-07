@extends('layouts.backend')

@section('content')

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
        <button class="btn btn-sm btn-info">
          <i class="fas fa-pen"></i>
        </button>
        <button class="btn btn-sm btn-danger">
          <i class="fas fa-trash"></i>
        </button>
      </td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    {{ $roles->links() }}
  </tfoot>
</table>

@endsection