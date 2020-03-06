<div class="form-group {{ $errors->has('solicitud_id') ? 'has-error' : ''}}">
    <label for="solicitud_id" class="control-label">{{ 'Solicitud Id' }}</label>
    <input class="form-control" name="solicitud_id" type="number" id="solicitud_id" value="{{ isset($viaje->solicitud_id) ? $viaje->solicitud_id : ''}}" >
    {!! $errors->first('solicitud_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
