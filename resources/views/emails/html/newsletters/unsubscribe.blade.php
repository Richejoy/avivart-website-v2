@extends('layouts.mail', array('title' => 'Accueil'))

@section('content')

<h1>Bonjour {{ $newsletter->email }} !</h1>

<p>Merci pour votre désabonnement.</p>

@endsection