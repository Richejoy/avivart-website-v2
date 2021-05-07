@extends('layouts.user', ['title' => 'Mes commandes'])

@section('body')

<div class="row">
    <div class="col-lg-12">

        @if($orders->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Date de livraison</th>
                        <th>Adresse de livraison</th>
                        <th>Coupon de remise</th>
                        <th>Mode de payement</th>
                        <th>Etat</th>
                        <th>Payée</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->getNumber() }}</td>
                        <td>{{ $order->dalivery_date }}</td>
                        <td>{{ $order->delivery_address }}</td>
                        <td>{{ $order->coupon }}</td>
                        <td>{{ $order->paymentMode }}</td>
                        <td>{{ $order->orderState }}</td>
                        <td>{{ $order->paid ? 'Oui' : 'Non' }}</td>
                        <td>{{ $order->created }}</td>
                        <td>
                            <a href="">Détails</a>
                            <a href="">Imprimer</a>
                            <a href="">Payer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p>Aucune</p>
        @endif

    </div>
</div>

@endsection