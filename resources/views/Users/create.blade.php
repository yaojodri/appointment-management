<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
<div>
    <!-- Be present above all else. - Naval Ravikant -->
</div>

@extends('layout.master')

@section('tittle','Create New User')

@section('content')
@include('users.form',['action'=>route('users.store')])

@endsection



