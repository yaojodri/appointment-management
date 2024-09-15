

@extends('layout.master')

@section('title','Edit Details')

@section('content')
    @include('doctors.form',[ 'action' => route('doctors.update', $doctor->id), 'edit' => true ])
@endsection
