<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($contacto->nombre) ? $contacto->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero') ? 'has-error' : ''}}">
    <label for="numero" class="control-label">{{ 'Numero' }}</label>
    <input class="form-control" name="numero" type="text" id="numero" value="{{ isset($contacto->numero) ? $contacto->numero : ''}}" >
    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pasajero_id') ? 'has-error' : ''}}">
    <label for="pasajero_id" class="control-label">{{ 'Pasajero Id' }}</label>
    <input class="form-control" name="pasajero_id" type="number" id="pasajero_id" value="{{ isset($contacto->pasajero_id) ? $contacto->pasajero_id : ''}}" >
    {!! $errors->first('pasajero_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
