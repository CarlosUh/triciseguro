<div class="form-group {{ $errors->has('pasajero_id') ? 'has-error' : ''}}">
    <label for="pasajero_id" class="control-label">{{ 'Pasajero Id' }}</label>
    <input class="form-control" name="pasajero_id" type="number" id="pasajero_id" value="{{ isset($solicitud->pasajero_id) ? $solicitud->pasajero_id : ''}}" required>
    {!! $errors->first('pasajero_id', '<p class="help-block">:message</p>') !!}
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
<div class="form-group {{ $errors->has('taxista_id') ? 'has-error' : ''}}">
    <label for="taxista_id" class="control-label">{{ 'Taxista Id' }}</label>
    <input class="form-control" name="taxista_id" type="number" id="taxista_id" value="{{ isset($solicitud->taxista_id) ? $solicitud->taxista_id : ''}}" required>
    {!! $errors->first('taxista_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
