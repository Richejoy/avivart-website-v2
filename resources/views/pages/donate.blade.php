@extends('layouts.contact', ['title' => 'Faire un Don'])

@section('body')

<section class="bg-light py-3">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 d-none d-sm-block d-flex align-self-center">
                <img src="https://cdn.pixabay.com/photo/2020/08/16/03/30/remote-5491798__340.png" alt="" class="w-100">
            </div>

            <div class="col-lg-6">
                @include("layouts.partials._validation_errors")

                <h1 class="lead font-weight-bold text-muted">Veuillez remplir et soumettre le formulaire de don.</h1>

                {!! Form::open() !!}

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            {{ Form::label('last_name', 'Nom') }}
                            {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Nom', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            {{ Form::label('first_name', 'Prénoms') }}
                            {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Prénoms', 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            {{ Form::label('phone', 'Téléphone (Avec indicatif)') }}
                            {{ Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Téléphone (Avec indicatif)', 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    {{ Form::label('message', 'Message') }}
                    {{ Form::textarea('message', null, ['rows' => 10, 'class' => 'form-control', 'placeholder' => 'Message', 'required' => true]) }}
                </div>

                <div class="mb-3">
                    {{ Form::label('amount', 'Montant') }}
                    <div class="input-group">
                        <span class="input-group-text">FCFA</span>
                        {{ Form::number('amount', 500, ['class' => 'form-control', 'placeholder' => 'Montant', 'required' => true, 'min' => 500, 'step' => 500]) }}
                    </div>
                </div>

                <div class="mb-3">
                    {{ Form::label('verification_code', 'Code de vérification') }}
                    <div class="input-group">
                        <span class="input-group-text bg-info"><strike>{{ session('verificationCode') }}</strike></span>
                        {{ Form::text('verification_code', null, ['class' => 'form-control', 'placeholder' => 'Code de vérification', 'required' => true]) }}
                    </div>
                </div>

                <div class="form-goup mt-3">
                    <button class="btn btn-success" type="submit">Soumettre</button>
                </div>

                {!! Form::close() !!}

            </div>

        </div>
    </div>
</section>

@endsection