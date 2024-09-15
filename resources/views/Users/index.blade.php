<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>

<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>

@extends('layout.master')
@section('title', 'List of Users')

@section('content')
<a class="btn btn-lg btn-primary mb-3" href="{{ route('users.create') }}">Add New User</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col" class="th-custom">UserID</th>
      <th scope="col" class="th-custom">Name</th>
      <th scope="col" class="th-custom">Email</th>
      <th scope="col" class="th-custom">Role</th>
      <th scope="col" class="th-custom">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>
      <td>
        <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-primary btn-sm me-2">View</a>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-success btn-sm me-2">Edit</a>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
        </form>      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('styles')
<style>
    /* Custom styles for table headers */
    .th-custom {
        padding: 0.5rem; /* Adjust this value as needed */
    }
</style>
@endsection

