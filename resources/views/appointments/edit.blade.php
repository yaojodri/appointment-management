<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>


@extends('layout.master')

@section('title','Reschedule Appointment')

@section('content')
    @include('appointments.form',[ 'action' => route('appointments.update', $appointment->id), 'edit' => true ])
@endsection
