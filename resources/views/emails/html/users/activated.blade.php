@extends('layouts.mail', array('title' => 'Accueil'))

@section('content')

<h1>Bonjour {{ $user->full_name }}!</h1>

@endsection