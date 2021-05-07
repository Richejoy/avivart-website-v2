@extends('layouts.auth', ['title' => 'Accueil'])

@section('body')

<section class="bg-light py-3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 d-none d-sm-block d-flex align-self-center">
                <img src="https://cdn.pixabay.com/photo/2018/11/29/21/51/social-media-3846597__340.png" alt=""
                    class="w-100">
            </div>

            <div class="col-md-6">

                @include("layouts.partials._validation_errors")

                <p class="text-center">
                    <img class="logo" src="{{ asset('public/img/logo.png') }}" alt="{{ config('app.name') }}">
                </p>

                <h1 class="lead text-center d-none">{{ config('app.name') }}</h1>
                <h6 class="text-center">Inscrivez-vous gratuitement en quelques secondes et passez vos commandes de
                    produits en toute liberté.</h6>

                {!! Form::open() !!}
                <div class="form-group">
                    {{ Form::label('country_id', 'Pays de résidence', ['class' => 'text-dark']) }}
                    {{ Form::select('country_id', $countries, null, ['class' => 'form-control', 'placeholder' => 'Pays de résidence', 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('civility_id', 'Civilité', ['class' => 'text-dark']) }}
                    {{ Form::select('civility_id', $civilities, null, ['class' => 'form-control', 'placeholder' => 'Civilité', 'required' => true]) }}
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('last_name', 'Nom', ['class' => 'text-dark']) }}
                            {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Nom', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('first_name', 'Prénoms', ['class' => 'text-dark']) }}
                            {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Prénoms', 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('email', 'Email', ['class' => 'text-dark']) }}
                            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => true]) }}
                            <div class="form-text">Doit être valide</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('phone', 'Téléphone', ['class' => 'text-dark']) }}
                            {{ Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Téléphone', 'required' => true]) }}
                            <div class="form-text">Sans indicatif</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('city', 'Ville', ['class' => 'text-dark']) }}
                            {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Ville', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('address', 'Adresse', ['class' => 'text-dark']) }}
                            {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Adresse', 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                    {{ Form::checkbox('tou', null, true) }}
                    <label for="tou" class="text-dark">J'ai lu et j'accepte les
                        {{ link_to_route('page.conditions', "conditions", null, ['class' => 'text-danger']) }} et
                        {{ link_to_route('page.terms', "termes", null, ['class' => 'text-danger']) }} du site</label>
                </div>

                <div class="text-right">
                    {{ Form::submit('Inscription', ['class' => 'btn btn-primary']) }}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</section>

@endsection