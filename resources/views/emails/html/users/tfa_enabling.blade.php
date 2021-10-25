@extends('layouts.mail', array('title' => 'User'))

@section('content')

<h1>Bonjour {{ $user->full_name }}!</h1>

<p>Vous avez demander l'activation/désactivation à double facteur (2FA) ?</p>

<p>Veuillez cliquer <a href="{{ route('page.enabled_tfa', array('email' => $user->email, 'token' => $user->token)) }}">ici</a> pour confirmer l'action.</p>

@endsection