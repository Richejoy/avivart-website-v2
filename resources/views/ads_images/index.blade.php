@extends('layouts.user', ['title' => "Images ou photos"])

@section('body')

<div class="row">
    <div class="col-lg-12">

        <p><a class="btn btn-success" href="{{ route('adImage.create', ['ad' => $ad->id]) }}">Ajouter une image ou photo</a></p>

    </div>
</div>

@endsection