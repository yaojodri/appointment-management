 
@extends('layout.master')
@section('title', 'List of Appointments')

@section('content')
<a class="btn btn-lg btn-primary mb-3" href="{{ route('appointments.create') }}">Add New Appointment</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col" class="th-custom">ID</th>
      <th scope="col" class="th-custom">Name</th>
      <th scope="col" class="th-custom">Appointment Date</th>
      <th scope="col" class="th-custom">Appointment Time</th>
      <th scope="col" class="th-custom">Appointment Type</th>
      <th scope="col" class="th-custom">Doctor</th>
      <th scope="col" class="th-custom">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($appointments as $appointment)
    <tr>
      <th scope="row">{{$appointment->id}}</th>
      <td>{{$appointment->name}}</td>
      <td>{{$appointment->appointment_date}}</td>
      <td>{{$appointment->appointment_time}}</td>
      <td>{{$appointment->appointment_type}}</td>
      <td>{{$appointment->doctor->name}}</td>
      <td>
        <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-outline-primary btn-sm">View</a>
        <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-outline-success btn-sm">Reschedule</a>
        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
        </form>
         </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $appointments->links() }}
@endsection

@section('styles')
<style>
    /* Custom styles for table headers */
    .th-custom {
        padding: 0.25rem; 
    }

    .table td, .table th {
        padding: 0.25rem; 
    }
</style>
@endsection
