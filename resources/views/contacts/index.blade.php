@extends('layouts.contact', ['title' => 'Contactez nous'])

@section('body')

<section class="bg-light py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                @include("layouts.partials._validation_errors")

                <h1 class="lead font-weight-bold text-muted">Veuillez remplir et soumettre le formulaire de contact.</h1>

                {!! Form::open(['route' => 'contact.store']) !!}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('last_name', 'Nom') }}
                            {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Nom', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('first_name', 'Prénoms') }}
                            {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Prénoms', 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('phone', 'Téléphone (Avec indicatif)') }}
                            {{ Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Téléphone', 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('contact_topic_id', 'Sujet') }}
                    {{ Form::select('contact_topic_id', $contactTopics, null, ['class' => 'form-control', 'placeholder' => 'Sujet', 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('message', 'Message') }}
                    {{ Form::textarea('message', null, ['rows' => 10, 'class' => 'form-control', 'placeholder' => 'Message', 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('verification_code', 'Code de vérification') }}
                    <div class="input-group">
                        <span class="input-group-text bg-info" id="verification_code"><strike>{{ session('verificationCode') }}</strike></span>
                        {{ Form::text('verification_code', null, ['class' => 'form-control', 'placeholder' => 'Code de vérification', 'required' => true]) }}
                    </div>
                </div>

                <div class="form-group mt-3">
                    <button class="btn btn-success" type="submit">Soumettre</button>
                </div>

                {!! Form::close() !!}

            </div>

            <div class="col-lg-6">
                <h2 class="font-weight-bold">Nous retrouver</h2>
                <p>
                    Adresse du siège AVIV'ART: Lomé, quartier Kégué non loin du Stade de Kégué Sur la rue Atlantique Produce qui longe la station d'essence CAP, prendre quatième ruelle a gauche de la mosquée, ensuite première ruelle a droite. Immeuble a gauche a l'angle.
                </p>

                <iframe style="width: 100%" height="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.458861114333!2d1.2394702143233212!3d6.203039995509483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e2fabd6a12b7%3A0x9e21d7218827f0b0!2zQ0FQIEvDqWd1w6k!5e0!3m2!1sfr!2stg!4v1542822795635" frameborder="0" style="border:0" allowfullscreen></iframe>

                <h2 class="font-weight-bold">Nos contacts</h2>
                <p>Adress : CAP Kégué</p>
                <p>Téléphone : +228 92 10 78 78</p>
                <p>Emails : <a href="mailto:contact@avivart.net">contact@avivart.net</a> & <a href="mailto:info@avivart.net">info@avivart.net</a></p>
            </div>

        </div>
    </div>
</section>

@endsection