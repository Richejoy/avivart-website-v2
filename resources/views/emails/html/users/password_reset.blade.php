@extends('layouts.mail', array('title' => 'User'))

@section('content')

<h1>Bonjour {{ $user }}!</h1>

<p>Votre mot de passe a été bien réinitialisé.</p>

@endsection