<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($pasajero->nombre) ? $pasajero->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contacto_id') ? 'has-error' : ''}}">
    <label for="contacto_id" class="control-label">{{ 'Contacto Id' }}</label>
    <input class="form-control" name="contacto_id" type="number" id="contacto_id" value="{{ isset($pasajero->contacto_id) ? $pasajero->contacto_id : ''}}" >
    {!! $errors->first('contacto_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('solicitud_id') ? 'has-error' : ''}}">
    <label for="solicitud_id" class="control-label">{{ 'Solicitud Id' }}</label>
    <input class="form-control" name="solicitud_id" type="number" id="solicitud_id" value="{{ isset($pasajero->solicitud_id) ? $pasajero->solicitud_id : ''}}" >
    {!! $errors->first('solicitud_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
