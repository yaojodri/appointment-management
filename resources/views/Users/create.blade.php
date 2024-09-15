

@extends('layout.master')

@section('tittle','Create New User')

@section('content')
@include('users.form',['action'=>route('users.store')])

@endsection



