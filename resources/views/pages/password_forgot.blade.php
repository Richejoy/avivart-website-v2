@extends('layouts.auth', ['title' => 'Mot de passe oublié ?'])

@section('body')

<section class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                @include("layouts.partials._validation_errors")

                <p class="text-center">
                    <img class="logo" src="{{ asset('public/img/logo.png') }}" alt="{{ config('app.name') }}">
                </p>

                <h6 class="text-center">Récupérez votre mot de passe quand vous le désirez.</h6>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-email-tab" data-toggle="pill" href="#pills-email"
                            role="tab" aria-controls="pills-email" aria-selected="true">Email</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-phone-tab" data-toggle="pill" href="#pills-phone" role="tab"
                            aria-controls="pills-phone" aria-selected="false">Téléphone</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-username-tab" data-toggle="pill" href="#pills-username" role="tab"
                            aria-controls="pills-username" aria-selected="false">Nom d'utilisateur</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-email" role="tabpanel"
                        aria-labelledby="pills-email-tab">

                        {!! Form::open() !!}
                        {{ Form::hidden('form', 'email') }}

                        <div class="mb-3">
                            {{ Form::label('email', 'Email', ['class' => 'text-dark']) }}
                            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => true]) }}
                        </div>

                        <div class="text-right">
                            {{ Form::submit('Envoyer', ['class' => 'btn btn-primary']) }}
                        </div>
                        {!! Form::close() !!}

                    </div>
                    <div class="tab-pane fade" id="pills-phone" role="tabpanel" aria-labelledby="pills-phone-tab">

                        {!! Form::open() !!}
                        {{ Form::hidden('form', 'phone') }}

                        <div class="mb-3">
                            {{ Form::label('phone', 'Téléphone', ['class' => 'text-dark']) }}
                            {{ Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Téléphone', 'required' => true]) }}
                            <div class="form-text">Sans indicatif</div>
                        </div>

                        <div class="text-right">
                            {{ Form::submit('Envoyer', ['class' => 'btn btn-primary']) }}
                        </div>
                        {!! Form::close() !!}

                    </div>
                    <div class="tab-pane fade" id="pills-username" role="tabpanel" aria-labelledby="pills-username-tab">

                        {!! Form::open() !!}
                        {{ Form::hidden('form', 'username') }}

                        <div class="mb-3">
                            {{ Form::label('username', "Nom d'utilisateur", ['class' => 'text-dark']) }}
                            {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => "Nom d'utilisateur", 'required' => true]) }}
                        </div>

                        <div class="text-right">
                            {{ Form::submit('Envoyer', ['class' => 'btn btn-primary']) }}
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection