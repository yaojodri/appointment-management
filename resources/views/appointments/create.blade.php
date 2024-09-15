

@extends('layout.master')

@section('title','Create New Appointment')

@section('content')
    @include('appointments.form',[ 'action' => route('appointments.store') ])
@endsection
