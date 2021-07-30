@extends('layouts.mail', array('title' => 'Newsletter'))

@section('content')

<h1>Bonjour {{ config('app.name') }}!</h1>

<p>{{ $newsletter->email }} s'est abonné au site le {{ $newsletter->created }}</p>

<ul>
    <li>Email : {{ $newsletter->email }}</li>
</ul>

@endsection