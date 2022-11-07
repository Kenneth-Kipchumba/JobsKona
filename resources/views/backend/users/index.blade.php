@extends('layouts.backend')

@section('content')

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
        <button class="btn btn-sm btn-success">Activate</button>
        <button class="btn btn-sm btn-warning">Deactivate</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection