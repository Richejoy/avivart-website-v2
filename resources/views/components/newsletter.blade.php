{!! Form::open(['route' => 'newsletter.store', 'class' => 'my-4']) !!}
<div class="input-group">
    <div class="input-group-prepend">
        <div class="input-group-text">@</div>
    </div>
    <input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre email">
    <div class="input-group-append">
        <button type="submit" class="{{ $btnColor }}">Souscrire</button>
    </div>
</div>
{!! Form::close() !!}