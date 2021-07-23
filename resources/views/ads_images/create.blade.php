@extends('layouts.user', ['title' => "Ajout d'image ou photo"])

@section('body')

<div class="row">
    <div class="col-lg-6">
        <p>
            <img src="http://avivart.net/images/ads_images/default.jpg" id="preview-upload" alt="Image ou Photo">
        </p>
    </div>

    <div class="col-lg-6">

        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#url" aria-controls="url" role="tab"
                        data-toggle="tab">URL</a></li>

                <li role="presentation"><a href="#link" aria-controls="link" role="tab" data-toggle="tab">Lien</a></li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane active" id="url" role="tabpanel">
                    {!! Form::open(['files' => true]) !!}
                    <div class="form-group">
                        {{ Form::label('image', 'Choisissez votre image ou photo', ['class' => 'btn btn-link']) }}
                        {{ Form::file('image', ['class' => 'form-control-file sr-only', 'data-upload' => true, 'required' => true, 'accept' => 'image/*']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'Description', ['class' => 'font-weight-bold']) }}
                        {{ Form::text('description', null, ['placeholder' => 'Description', 'class' => 'form-control', 'required' => true]) }}
                    </div>

                    <div class="form-group">
                        {{ Form::hidden('form', 'url') }}
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-success']) }}
                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="tab-pane" id="link" role="tabpanel">
                    {!! Form::open() !!}
                    <div class="form-group">
                        {{ Form::label('link', 'Lien', ['class' => 'font-weight-bold']) }}
                        {{ Form::text('link', null, ['placeholder' => 'Lien', 'class' => 'form-control', 'required' => true]) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'Description', ['class' => 'font-weight-bold']) }}
                        {{ Form::text('description', null, ['placeholder' => 'Description', 'class' => 'form-control', 'required' => true]) }}
                    </div>

                    <div class="form-group">
                        {{ Form::hidden('form', 'link') }}
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-success']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</div>

@endsection