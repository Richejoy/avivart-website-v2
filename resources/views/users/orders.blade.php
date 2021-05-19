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
                        <th>Montant</th>
                        <th>Payée</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->getNumber() }}</td>
                        <td>{{ $order->delivery_date }}</td>
                        <td>{{ $order->delivery_address }}</td>
                        <td>{{ $order->coupon }}</td>
                        <td>{{ $order->paymentMode }}</td>
                        <td>{{ $order->orderState }}</td>
                        <td>{{ $order->amount }}</td>
                        <td>{{ $order->paid ? 'Oui' : 'Non' }}</td>
                        <td>{{ $order->created }}</td>
                        <td>
                            <a target="_blank" data-toggle="tooltip" title="Facture"
                                    href="{{ route('order.pdf', ['order' => $order]) }}" class="text-primary"><i
                                        class="fa fa-file"></i></a>

                            <a style="padding: 0 15px" data-toggle="tooltip" title="Afficher"
                                    href="{{ route('order.show', ['order' => $order]) }}" class="text-warning"><i
                                        class="fa fa-info-circle"></i></a>

                            @if(!$order->paid)
                            <a target="_blank" data-toggle="tooltip" title="Payer"
                                    href="{{ route('order.checkout', ['order' => $order]) }}" class="text-success"><i
                                        class="fa fa-money"></i></a>
                            @endif
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