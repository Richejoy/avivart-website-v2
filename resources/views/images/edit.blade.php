@extends('layouts.user', ['title' => "Edition d'image ou photo"])

@section('body')

<div class="row">
    <div class="col-lg-6">
        <p>
            <img class="{{ ($image->folder == 'users') ? 'img-circle img-thumbnail' : 'img-thumbnail' }}" src="{{ $image->link }}" id="preview-upload" alt="{{ $image->description }}">
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
                    {!! Form::model($image, ['files' => true]) !!}
                    {{ Form::hidden('form', 'url') }}
                    <div class="form-group">
                        <p>URL</p>
                        {{ Form::label('image', 'Choisissez votre image ou photo', ['class' => 'btn btn-warning']) }}
                        {{ Form::file('image', ['class' => 'form-control-file sr-only', 'data-upload' => true, 'required' => true, 'accept' => 'image/*']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'Description', ['class' => 'font-weight-bold']) }}
                        {{ Form::text('description', null, ['placeholder' => 'Description', 'class' => 'form-control', 'required' => true]) }}
                    </div>

                    <div class="form-group">
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-danger']) }}
                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="tab-pane" id="link" role="tabpanel">
                    {!! Form::model($image) !!}
                    {{ Form::hidden('form', 'link') }}
                    <div class="form-group">
                        {{ Form::label('link', 'Lien', ['class' => 'font-weight-bold']) }}
                        {{ Form::text('link', null, ['placeholder' => 'Lien', 'class' => 'form-control', 'required' => true]) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'Description', ['class' => 'font-weight-bold']) }}
                        {{ Form::text('description', null, ['placeholder' => 'Description', 'class' => 'form-control', 'required' => true]) }}
                    </div>

                    <div class="form-group">
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-danger']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</div>

@endsection