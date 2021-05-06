@extends('layouts.mail', array('title' => 'Contact'))

@section('content')

<h1>Bonjour {{ $contact->email }}!</h1>

<p>Merci d'avoir contacté le site!</p>

<ul>
    <li>Email : {{ $contact->email }}</li>
</ul>

<p>Message :</p>

<p>
    {{ $contact->message }}
</p>

<p>Vous aurez de nos nouvelles dans les prochaines 24H</p>

@endsection