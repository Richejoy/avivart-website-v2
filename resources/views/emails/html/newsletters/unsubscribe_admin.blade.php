@extends('layouts.mail', array('title' => 'Newsletter'))

@section('content')

<h1>Bonjour {{ config('app.name', 'Laravel') }}!</h1>

<p>{{ $newsletter->email }} s'est désabonné au site le {{ $newsletter->modified }}</p>

<ul>
    <li>Email : {{ $newsletter->email }}</li>
</ul>

@endsection