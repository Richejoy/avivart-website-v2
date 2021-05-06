@extends('layouts.user', ['title' => 'Mon Profil'])

@section('body')

<div class="row">
	<div class="col-lg-12">
		
		<p class="text-center">
            <img src="{{ Auth::user()->image->link }}" width="150" height="150" alt="Image" class="circle">
        </p>

        <h2 class="lead text-success font-weight-bold">Profil</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <caption>{{ link_to_route('user.edit', 'Editer le profil', ['user' => Auth::user()], ['class' => 'btn btn-warning']) }}</caption>
                <thead class="thead-dark">
                    <tr>
                        <th>Clé</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nom & Prénoms</td>
                        <td>{{ Auth::user()->fullName() }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td>Téléphone</td>
                        <td>+{{ Auth::user()->country->phonecode }} {{ Auth::user()->phone }}</td>
                    </tr>
                    <tr>
                        <td>Nom d'utilisateur</td>
                        <td>{{ Auth::user()->username }}</td>
                    </tr>
                    <tr>
                        <td>Dernière connexion</td>
                        <td><time class="timeago" datetime="{{ Auth::user()->last_login }}">{{ Auth::user()->last_login }}</time></td>
                    </tr>
                    <tr>
                        <td>Nombre de connexion</td>
                        <td>{{ Auth::user()->nb_login }} fois</td>
                    </tr>
                    <tr>
                        <td>Civilité</td>
                        <td>{{ Auth::user()->civility }}</td>
                    </tr>
                    <tr>
                        <td>Pays de résidence</td>
                        <td>{{ Auth::user()->country }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

	</div>
</div>

@endsection