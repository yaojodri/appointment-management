

@extends('layout.master')

@section('title','Reschedule Appointment')

@section('content')
    @include('appointments.form',[ 'action' => route('appointments.update', $appointment->id), 'edit' => true ])
@endsection
