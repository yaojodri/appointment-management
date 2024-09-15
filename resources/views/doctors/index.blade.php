<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>

@extends('layout.master')
@section('title','List of Doctors')

@section('content')
<a class="btn btn-lg btn-primary mb-3" href="{{route('doctors.create')}}">Add New Doctor</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col" class="th-custom">ID</th>
      <th scope="col" class="th-custom">Doctor's Name</th>
      <th scope="col" class="th-custom">Specialization</th>
      <th scope="col" class="th-custom">Phone Number</th>
      <th scope="col" class="th-custom">Email</th>
      <th scope="col" class="th-custom">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($doctors as $doctor)
    <tr>
      <th scope="row">{{$doctor->id}}</th>
      <td>{{$doctor->name}}</td>
      <td>{{$doctor->specialization}}</td>
      <td>{{$doctor->phone_number}}</td>
      <td>{{$doctor->email}}</td>
      <td>
        <a href="{{route('doctors.show', $doctor->id)}}" class="btn btn-outline-primary btn-sm me-2">View</a>
        <a href="{{route('doctors.edit', $doctor->id)}}" class="btn btn-outline-success btn-sm me-2">Edit</a>
        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $doctors->links() }}
@endsection

@section('styles')
<style>
    /* Custom styles for table headers */
    .th-custom {
        padding: 0.5rem; /* Adjust this value as needed */
    }
</style>
@endsection
