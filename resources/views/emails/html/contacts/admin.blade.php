@extends('layouts.mail', array('title' => 'Contact'))

@section('content')

<h1>Bonjour {{ config('app.name') }}!</h1>

<p>{{ $contact->email }} a contacté le site le {{ $contact->created }}</p>

<ul>
    <li>Email : {{ $contact->email }}</li>
</ul>

<p>Message :</p>

<p>
    {{ $contact->message }}
</p>

@endsection