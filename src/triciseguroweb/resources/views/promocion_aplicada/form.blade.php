<div class="form-group {{ $errors->has('promocion_id') ? 'has-error' : ''}}">
    <label for="promocion_id" class="control-label">{{ 'Promocion Id' }}</label>
    <input class="form-control" name="promocion_id" type="number" id="promocion_id" value="{{ isset($promocion_aplicada->promocion_id) ? $promocion_aplicada->promocion_id : ''}}" >
    {!! $errors->first('promocion_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('solicitud_id') ? 'has-error' : ''}}">
    <label for="solicitud_id" class="control-label">{{ 'Solicitud Id' }}</label>
    <input class="form-control" name="solicitud_id" type="number" id="solicitud_id" value="{{ isset($promocion_aplicada->solicitud_id) ? $promocion_aplicada->solicitud_id : ''}}" >
    {!! $errors->first('solicitud_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
