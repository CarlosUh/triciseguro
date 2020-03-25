<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <textarea class="form-control" rows="5" name="nombre" type="textarea" id="nombre" >{{ isset($contacto->nombre) ? $contacto->nombre : ''}}</textarea>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero') ? 'has-error' : ''}}">
    <label for="numero" class="control-label">{{ 'Numero' }}</label>
    <textarea class="form-control" rows="5" name="numero" type="textarea" id="numero" >{{ isset($contacto->numero) ? $contacto->numero : ''}}</textarea>
    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pasajero_id') ? 'has-error' : ''}}">
    <label for="pasajero_id" class="control-label">{{ 'Pasajero Id' }}</label>
    <textarea class="form-control" rows="5" name="pasajero_id" type="textarea" id="pasajero_id" >{{ isset($contacto->pasajero_id) ? $contacto->pasajero_id : ''}}</textarea>
    {!! $errors->first('pasajero_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
