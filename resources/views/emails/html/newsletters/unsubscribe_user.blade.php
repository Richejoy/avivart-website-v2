@extends('layouts.mail', array('title' => 'Newsletter'))

@section('content')

<h1>Bonjour {{ $newsletter->email }}!</h1>

<p>Merci pour votre désabonnement.</p>

@endsection