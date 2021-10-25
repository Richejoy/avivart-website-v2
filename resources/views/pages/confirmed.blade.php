@extends('layouts.auth', ['title' => 'Confirmation'])

@section('content')

<section class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                @include("layouts.partials._validation_errors")

                <p class="text-center">
                    <img class="logo" src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}">
                </p>

                <h6 class="text-center">Veuillez entrer le code de confirmation 2FA.</h6>

                {!! Form::open() !!}

                <div class="mb-3">
                    {{ Form::label('tfa_code', 'Code 2FA', ['class' => 'text-dark']) }}
                    {{ Form::text('tfa_code', null, ['class' => 'form-control', 'placeholder' => 'Code 2FA', 'required' => true]) }}
                </div>

                <div class="text-right">
                    {{ Form::submit('Valider', ['class' => 'btn btn-primary']) }}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</section>

@endsection