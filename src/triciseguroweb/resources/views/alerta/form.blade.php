<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($alertum->descripcion) ? $alertum->descripcion : ''}}" >
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="datetime-local" id="fecha" value="{{ isset($alertum->fecha) ? $alertum->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pasajero_id') ? 'has-error' : ''}}">
    <label for="pasajero_id" class="control-label">{{ 'Pasajero Id' }}</label>
    <input class="form-control" name="pasajero_id" type="number" id="pasajero_id" value="{{ isset($alertum->pasajero_id) ? $alertum->pasajero_id : ''}}" >
    {!! $errors->first('pasajero_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('viaje_id') ? 'has-error' : ''}}">
    <label for="viaje_id" class="control-label">{{ 'Viaje Id' }}</label>
    <input class="form-control" name="viaje_id" type="number" id="viaje_id" value="{{ isset($alertum->viaje_id) ? $alertum->viaje_id : ''}}" >
    {!! $errors->first('viaje_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
