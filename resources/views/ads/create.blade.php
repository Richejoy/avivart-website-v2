@extends('layouts.ad', ['title' => 'Publier une annonce'])

@section('body')

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 d-none d-sm-block d-flex align-self-center">
                <img src="https://cdn.pixabay.com/photo/2016/06/15/15/25/loudspeaker-1459128__340.png" alt=""
                    class="w-100">
            </div>

            <div class="col-md-6">

                @include("layouts.partials._validation_errors")

                <h2 class="font-weight-bold">Publication d'annonce</h2>
                <h6 class="text-secondary mb-5">Publier des annonces gratuitement, validité une semaine.</h6>

                {!! Form::open(['route' => 'ad.store']) !!}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('ad_category_id', 'Catégorie', ['class' => 'text-dark']) }}
                            {{ Form::select('ad_category_id', $adCategories, null, ['class' => 'form-control', 'placeholder' => 'Catégorie', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('ad_type_id', 'Type', ['class' => 'text-dark']) }}
                            {{ Form::select('ad_type_id', $adTypes, null, ['class' => 'form-control', 'placeholder' => 'Type', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('currency_id', 'Devise', ['class' => 'text-dark']) }}
                            {{ Form::select('currency_id', $currencies, null, ['class' => 'form-control', 'placeholder' => 'Devise', 'required' => true]) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('name', 'Nom', ['class' => 'text-dark']) }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('price', 'Prix', ['class' => 'text-dark']) }}
                            {{ Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Prix', 'required' => true, 'min' => 0]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Description', ['class' => 'text-dark']) }}
                    {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('characteristics', 'Caractéristiques', ['class' => 'text-dark']) }}
                    {{ Form::textarea('characteristics', null, ['class' => 'form-control', 'placeholder' => 'Caractéristiques', 'required' => true]) }}
                </div>

                <div class="text-right">
                    {{ Form::submit('Publier', ['class' => 'btn btn-primary']) }}
                </div>
                {!! Form::close() !!}

                <p>
                    <strong>NB :</strong> Une fois le formulaire valider avec les bonnes informations; vous pouvez modifier l'image de votre annonce sur la page suivante.
                </p>

            </div>

        </div>
    </div>
</section>

@endsection