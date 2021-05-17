@extends('layouts.cart', ['title' => 'Paiement des commandes'])

@section('body')

<section class="bg-light py-5">
    <div class="container-fluid">

        @if(Cart::count())

        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-header">Détails de la commande</div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Sous Total</td>
                                    <td>{{ Cart::subtotal() }} FCFA</td>
                                </tr>
                                <tr>
                                    <td>Taxe</td>
                                    <td>{{ Cart::tax() }} FCFA</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>{{ Cart::total() }} FCFA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 pt-3">

                @if(Auth::check())

                <div class="alert alert-success" role="alert">
                    Connecté en tant que {{ Auth::user()->username }}
                </div>

                <div class="card">
                    <div class="card-header">Formulaire de commande</div>
                    <div class="card-body">
                        {!! Form::open() !!}

                        <div class="form-group">
                            <label for="delivery_address">Adresse de livraison</label>
                            <input type="text" class="form-control" id="delivery_address" name="delivery_address"
                                placeholder="Adresse de livraison">
                        </div>

                        <div class="form-group">
                            <label for="delivery_date">Date de livraison</label>
                            <input type="date" class="form-control" id="delivery_date" name="delivery_date">
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

                @endif

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