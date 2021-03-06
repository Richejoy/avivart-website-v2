@extends('layouts.mail', array('title' => 'User'))

@section('content')

<h1>Bonjour {{ $user->full_name }}!</h1>

<p>Vous avez demander la rĂ©initialisation de votre mot de passe ?</p>

<p>Veuillez cliquer <a href="{{ route('page.password_reset', array('email' => $user->email, 'token' => $user->token)) }}">ici</a> pour rĂ©initialiser votre mot de passe.</p>

@endsection