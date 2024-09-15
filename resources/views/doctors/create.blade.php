

@extends('layout.master')

@section('title','Create New Doctor')

@section('content')
    @include('doctors.form',[ 'action' => route('doctors.store') ])
@endsection
