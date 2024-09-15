<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>

@extends('layout.master')

@section('title','Edit Details')

@section('content')
    @include('doctors.form',[ 'action' => route('doctors.update', $doctor->id), 'edit' => true ])
@endsection
