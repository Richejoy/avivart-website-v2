@extends('layouts.user', ['title' => 'Mes payements'])

@section('body')

<div class="row">
    <div class="col-lg-12">

        @if($payments->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Commande</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Référence de payement</th>
                        <th>Méthode de payement</th>
                        <th>Téléphone</th>
                        <th>Identifiant</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->order->getNumber() }}</td>
                        <td>{{ $payment->order->amount }}</td>
                        <td>{{ $payment->created }}</td>
                        <td>{{ $payment->payment_reference }}</td>
                        <td>{{ $payment->payment_method }}</td>
                        <td>{{ $payment->phone_number }}</td>
                        <td>{{ $payment->identifier }}</td>
                        <td>{{ $payment->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p>Aucun</p>
        @endif

    </div>
</div>

@endsection