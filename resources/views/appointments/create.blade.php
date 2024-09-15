<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>

@extends('layout.master')

@section('title','Create New Appointment')

@section('content')
    @include('appointments.form',[ 'action' => route('appointments.store') ])
@endsection
