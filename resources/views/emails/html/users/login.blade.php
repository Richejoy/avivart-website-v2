@extends('layouts.mail', array('title' => 'User'))

@section('content')

<h1>Bonjour {{ $user->full_name }}!</h1>

<p>
    Quelqu'un vient de se connecter à votre compte.
</p>

@endsection