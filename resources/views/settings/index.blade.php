@extends('layouts.user', ['title' => 'Parametres'])

@section('body')

<div class="row">
        <div class="col-lg-12">

            <h2 class="lead font-weight-bold"><u>Options de paramétrage</u></h2>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Opération</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Activer/Désactiver la double authentification (2FA)</th>
                            <td>{{ Auth::user()->tfa_enabled ? 'Activer' : 'Désactiver' }}</td>
                            <td>
                                @if(Auth::user()->tfa_enabled)
                                <a href="{{ route('settings.enabling_tfa') }}">Désactiver</a>
                                @else
                                <a href="{{ route('settings.enabling_tfa') }}">Activer</a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>Supprimer mon compte</th>
                            <td>{{ Auth::user()->removed ? 'Inactif' : 'Actif' }}</td>
                            <td>
                                <a href="{{ route('settings.removing_account') }}">Supprimer</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
</div>

@endsection