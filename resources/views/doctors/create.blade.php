<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>

@extends('layout.master')

@section('title','Create New Doctor')

@section('content')
    @include('doctors.form',[ 'action' => route('doctors.store') ])
@endsection
