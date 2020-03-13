<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($pasajero->nombre) ? $pasajero->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('persona_id') ? 'has-error' : ''}}">
    <label for="persona_id" class="control-label">{{ 'Persona Id' }}</label>
    <input class="form-control" name="persona_id" type="text" id="persona_id" value="{{ isset($pasajero->persona_id) ? $pasajero->persona_id : ''}}" >
    {!! $errors->first('persona_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('promocion_id') ? 'has-error' : ''}}">
    <label for="promocion_id" class="control-label">{{ 'Promocion Id' }}</label>
    <input class="form-control" name="promocion_id" type="text" id="promocion_id" value="{{ isset($pasajero->promocion_id) ? $pasajero->promocion_id : ''}}" >
    {!! $errors->first('promocion_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
