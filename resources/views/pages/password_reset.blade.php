@extends('layouts.auth', ['title' => 'Réinitialisation de mot de passe'])

@section('body')

<section class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">

                @include("layouts.partials._validation_errors")

                <p class="text-center">
                    <img class="logo" src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}">
                </p>

                <h6 class="text-center">Réinitialiser votre mot de passe à tout moment.</h6>

                {!! Form::open() !!}

                <div class="mb-3">
                    {{ Form::label('password', 'Mot de passe', ['class' => 'text-dark']) }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe', 'required' => true]) }}
                </div>

                <div class="mb-3">
                    {{ Form::label('password_confirmation', 'Confirmation', ['class' => 'text-dark']) }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation', 'required' => true]) }}
                </div>

                <div class="text-right">
                    {{ Form::submit('Réinitialiser', ['class' => 'btn btn-primary']) }}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</section>

@endsection