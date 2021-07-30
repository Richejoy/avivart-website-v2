@extends('layouts.user', ['title' => 'Edition Profil'])

@section('body')

<div class="row">
    <div class="col-lg-12">

        <p>
            {{ link_to_route('user.edit', 'Actualiser', ['user' => auth()->user()], ['class' => 'btn btn-success']) }}
            {{ link_to_route('user.show', 'Profil', ['user' => auth()->user()], ['class' => 'btn btn-primary']) }}
        </p>

        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#identity" aria-controls="identity" role="tab"
                        data-toggle="tab">Identité</a></li>

                <li role="presentation"><a href="#username" aria-controls="username" role="tab" data-toggle="tab">Nom
                        d'utilisateur</a></li>

                <li role="presentation"><a href="#email" aria-controls="email" role="tab" data-toggle="tab">Email</a>
                </li>

                <li role="presentation"><a href="#phone" aria-controls="phone" role="tab"
                        data-toggle="tab">Téléphone</a></li>

                <li role="presentation"><a href="#password" aria-controls="password" role="tab" data-toggle="tab">Mot de
                        passe</a></li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane active" id="identity" role="tabpanel">
                    {!! Form::model(auth()->user()) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('country_id', 'Pays de résidence') }}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-globe"></i>
                                    </div>
                                    {{ Form::select('country_id', $countries, null, ['class' => 'form-control', 'placeholder' => '----Choisir----', 'required' => true]) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('civility_id', 'Civilité') }}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-venus-mars"></i>
                                    </div>
                                    {{ Form::select('civility_id', $civilities, null, ['class' => 'form-control', 'placeholder' => '----Choisir----', 'required' => true]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('last_name', 'Nom', ['class' => 'font-weight-bold']) }}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i>
                                    </div>
                                    {{ Form::text('last_name', null, ['placeholder' => 'Nom', 'class' => 'form-control', 'required' => true]) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('first_name', 'Prénoms', ['class' => 'font-weight-bold']) }}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i>
                                    </div>
                                    {{ Form::text('first_name', null, ['placeholder' => 'Prénoms', 'class' => 'form-control', 'required' => true]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('city', 'Ville', ['class' => 'font-weight-bold']) }}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i>
                                    </div>
                                    {{ Form::text('city', null, ['placeholder' => 'Ville', 'class' => 'form-control', 'required' => true]) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('address', 'Adresse', ['class' => 'font-weight-bold']) }}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i>
                                    </div>
                                    {{ Form::text('address', null, ['placeholder' => 'Adresse', 'class' => 'form-control', 'required' => true]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::hidden('form', 'identity') }}
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-danger']) }}
                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="tab-pane" id="username" role="tabpanel">
                    {!! Form::model(auth()->user()) !!}
                    <div class="form-group">
                        {{ Form::label('username', "Nom d'utilisateur", ['class' => 'font-weight-bold']) }}
                        <div class="input-group">
                            <div class="input-group-addon"><span class="fa fa-user"></span>
                            </div>
                            {{ Form::text('username', null, ['placeholder' => "Nom d'utilisateur", 'class' => 'form-control', 'required' => true]) }}
                        </div>
                        <small class="form-text text-muted">Représente votre nom unique</small>
                    </div>
                    <div class="form-group">
                        {{ Form::hidden('form', 'username') }}
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-danger']) }}
                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="tab-pane" id="email" role="tabpanel">
                    {!! Form::model(auth()->user()) !!}
                    <div class="form-group">
                        {{ Form::label('email', 'Email', ['class' => 'font-weight-bold']) }}
                        <div class="input-group">
                            <div class="input-group-addon"><span class="fa fa-at"></span>
                            </div>
                            {{ Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => true]) }}
                        </div>
                        <small class="form-text text-muted">Veuillez mettre une adresse email valide. Elle ne sera pas
                            utiliser à d'autres fins</small>
                    </div>
                    <div class="form-group">
                        {{ Form::hidden('form', 'email') }}
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-danger']) }}
                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="tab-pane" id="phone" role="tabpanel">
                    {!! Form::model(auth()->user()) !!}
                    <div class="form-group">
                        {{ Form::label('phone', 'Téléphone', ['class' => 'font-weight-bold']) }}
                        <div class="input-group">
                            <div class="input-group-addon">{{ auth()->user()->country }}
                            </div>
                            {{ Form::tel('phone', null, ['placeholder' => 'Téléphone', 'class' => 'form-control', 'required' => true]) }}
                        </div>
                        <small class="form-text text-muted">Veuillez mettre un numero valide sans l'indicatif. IL ne
                            sera pas utiliser à d'autres fins</small>
                    </div>
                    <div class="form-group">
                        {{ Form::hidden('form', 'phone') }}
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-danger']) }}
                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="tab-pane" id="password" role="tabpanel">
                    {!! Form::open() !!}

                    <div class="form-group">
                        {{ Form::label('password_old', 'Ancien mot de passe', ['class' => 'font-weight-bold']) }}
                        <div class="input-group">
                            <div class="input-group-addon"><span class="fa fa-eye-slash"></span>
                            </div>
                            {{ Form::password('password_old', ['placeholder' => 'Ancien mot de passe', 'class' => 'form-control', 'required' => true]) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('password', 'Mot de passe', ['class' => 'font-weight-bold']) }}
                        <div class="input-group">
                            <div class="input-group-addon"><span class="fa fa-eye-slash"></span>
                            </div>
                            {{ Form::password('password', ['placeholder' => 'Mot de passe', 'class' => 'form-control', 'required' => true]) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('password_confirmation', 'Confirmation mot de passe', ['class' => 'font-weight-bold']) }}
                        <div class="input-group">
                            <div class="input-group-addon"><span class="fa fa-eye-slash"></span>
                            </div>
                            {{ Form::password('password_confirmation', ['placeholder' => 'Confirmation mot de passe', 'class' => 'form-control', 'required' => true]) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::hidden('form', 'password') }}
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-danger']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</div>

@endsection