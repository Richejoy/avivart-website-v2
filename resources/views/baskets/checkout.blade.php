@extends('layouts.basket', ['title' => 'Payement'])

@section('body')

<section class="bg-light py-5">
    <div class="container-fluid">

        @if(Cart::instance('cosmetic')->count())

        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-header">Détails de la commande</div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Sous Total</td>
                                    <td>{{ Cart::instance('cosmetic')->subtotal() }} FCFA</td>
                                </tr>
                                <tr>
                                    <td>Taxe</td>
                                    <td>{{ Cart::instance('cosmetic')->tax() }} FCFA</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>{{ Cart::instance('cosmetic')->total() }} FCFA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 pt-3">

                @auth

                <div class="alert alert-success" role="alert">
                    Connecté en tant que {{ auth()->user()->username }}
                </div>

                <div class="card">
                    <div class="card-header">Formulaire de commande</div>
                    <div class="card-body">
                        {!! Form::open() !!}

                        <div class="form-group">
                            {{ Form::label('delivery_address', 'Adresse de livraison', ['class' => '']) }}
                            {{ Form::text('delivery_address', null, ['class' => 'form-control', 'placeholder' => 'Adresse de livraison', 'required' => true]) }}
                            <div class="help-text">Veuillez saisir une adresse valide et complète.</div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('delivery_date', 'Date de livraison', ['class' => '']) }}
                            {{ Form::date('delivery_date', now(), ['class' => 'form-control', 'required' => true]) }}
                            <div class="help-text">Doit être supérieure ou égale à aujourd'hui.</div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('payment_mode_id', 'Mode de payement', ['class' => '']) }}
                            {{ Form::select('payment_mode_id', $paymentModes, null, ['class' => 'form-control', 'required' => true]) }}
                            <div class="help-text">Service de payement en ligne utilisant nos réseaux Tmoney et Flooz.</div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Procéder au payement</button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>

                @else

                <div class="alert alert-warning" role="alert">
                    Vous devez vous connecter avant de passer une commande.
                </div>

                <p>
                    <a href="{{ route('page.login') }}" class="btn btn-primary">Se connecter maintenant</a>
                </p>

                @endauth

            </div>
        </div>

        @else

        <div class="row">
            <div class="col-lg-12">
                <p>Aucune commande en cours de payement</p>
            </div>
        </div>

        @endif
    </div>
</section>

@endsection