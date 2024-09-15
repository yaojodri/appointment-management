<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>
<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>

@extends('layout.master')

@section('title','Edit '.$user->name)

@section('content')
    @include('users.form',[ 
        'action' => route('users.update', $user->id), 
        'edit' => true ]
        )
@endsection



