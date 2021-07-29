@extends('layouts.ad', ['title' => $ad->name])

@section('body')

<section class="bg-light py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <h2 class="font-weight-bold">Vos avantages</h2>
                <ol>
                    <li>Améliore le positionnement de votre annonce pour une très grande visibilité.</li>
                    <li>Prolonge la date d'expiration de votre annonce en fonction de la formule choisie.</li>
                </ol>
            </div>

            <div class="col-lg-6">
                {!! Form::open() !!}
                <div class="form-group">
                    {{ Form::label('formula_id', 'Formule', ['class' => 'text-dark']) }}
                    {{ Form::select('formula_id', $formulas, null, ['class' => 'form-control', 'placeholder' => 'Formule', 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Procéder au payement', ['class' => 'btn btn-primary']) }}
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</section>

@endsection