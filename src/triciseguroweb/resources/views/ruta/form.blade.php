<div class="form-group {{ $errors->has('solicitud_id') ? 'has-error' : ''}}">
    <label for="solicitud_id" class="control-label">{{ 'Solicitud Id' }}</label>
    <input class="form-control" name="solicitud_id" type="number" id="solicitud_id" value="{{ isset($rutum->solicitud_id) ? $rutum->solicitud_id : ''}}" >
    {!! $errors->first('solicitud_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('origen_id') ? 'has-error' : ''}}">
    <label for="origen_id" class="control-label">{{ 'Origen Id' }}</label>
    <input class="form-control" name="origen_id" type="number" id="origen_id" value="{{ isset($rutum->origen_id) ? $rutum->origen_id : ''}}" >
    {!! $errors->first('origen_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('destino_id') ? 'has-error' : ''}}">
    <label for="destino_id" class="control-label">{{ 'Destino Id' }}</label>
    <input class="form-control" name="destino_id" type="number" id="destino_id" value="{{ isset($rutum->destino_id) ? $rutum->destino_id : ''}}" >
    {!! $errors->first('destino_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
