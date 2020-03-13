<div class="form-group {{ $errors->has('promocion_id') ? 'has-error' : ''}}">
    <label for="promocion_id" class="control-label">{{ 'Promocion Id' }}</label>
    <input class="form-control" name="promocion_id" type="number" id="promocion_id" value="{{ isset($solicitud->promocion_id) ? $solicitud->promocion_id : ''}}" required>
    {!! $errors->first('promocion_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ruta_id') ? 'has-error' : ''}}">
    <label for="ruta_id" class="control-label">{{ 'Ruta Id' }}</label>
    <input class="form-control" name="ruta_id" type="number" id="ruta_id" value="{{ isset($solicitud->ruta_id) ? $solicitud->ruta_id : ''}}" required>
    {!! $errors->first('ruta_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calificacion_id') ? 'has-error' : ''}}">
    <label for="calificacion_id" class="control-label">{{ 'Calificacion Id' }}</label>
    <input class="form-control" name="calificacion_id" type="number" id="calificacion_id" value="{{ isset($solicitud->calificacion_id) ? $solicitud->calificacion_id : ''}}" required>
    {!! $errors->first('calificacion_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('servicio_id') ? 'has-error' : ''}}">
    <label for="servicio_id" class="control-label">{{ 'Servicio Id' }}</label>
    <input class="form-control" name="servicio_id" type="number" id="servicio_id" value="{{ isset($solicitud->servicio_id) ? $solicitud->servicio_id : ''}}" required>
    {!! $errors->first('servicio_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
