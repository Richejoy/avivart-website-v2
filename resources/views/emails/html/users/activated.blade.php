@extends('layouts.mail', array('title' => 'Accueil'))

@section('content')

<h1>Bonjour {{ $user }}!</h1>

@endsection