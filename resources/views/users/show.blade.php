@extends('layouts.user', ['title' => 'Mon Profil'])

@section('body')

<div class="row">
    <div class="col-lg-12">

        <p class="text-center">
            <img src="{{ auth()->user()->image->link }}" width="150" height="150" alt="Image" class="circle">
        </p>
        <p class="text-center">
            {{ link_to_route('image.edit', 'Editer la photo', ['image' => auth()->user()->image], ['class' => 'btn btn-link']) }}
        </p>

        <p>
            {{ link_to_route('user.edit', 'Editer le profil', ['user' => Auth::user()], ['class' => 'btn btn-danger']) }}
        </p>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Clé</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nom & Prénoms</td>
                        <td>{{ auth()->user()->fullName() }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ auth()->user()->email }}</td>
                    </tr>
                    <tr>
                        <td>Téléphone</td>
                        <td>+{{ auth()->user()->country->phonecode }} {{ auth()->user()->phone }}</td>
                    </tr>
                    <tr>
                        <td>Nom d'utilisateur</td>
                        <td>{{ auth()->user()->username }}</td>
                    </tr>
                    <tr>
                        <td>Dernière connexion</td>
                        <td><time class="timeago"
                                datetime="{{ auth()->user()->last_login }}">{{ auth()->user()->last_login }}</time></td>
                    </tr>
                    <tr>
                        <td>Nombre de connexion</td>
                        <td>{{ auth()->user()->nb_login }} fois</td>
                    </tr>
                    <tr>
                        <td>Civilité</td>
                        <td>{{ auth()->user()->civility }}</td>
                    </tr>
                    <tr>
                        <td>Pays de résidence</td>
                        <td>{{ auth()->user()->country }}</td>
                    </tr>
                    <tr>
                        <td>Ville</td>
                        <td>{{ auth()->user()->city }}</td>
                    </tr>
                    <tr>
                        <td>Adresse</td>
                        <td>{{ auth()->user()->address }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection