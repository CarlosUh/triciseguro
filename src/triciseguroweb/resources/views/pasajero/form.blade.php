<div class="form-group {{ $errors->has('promocion_id') ? 'has-error' : ''}}">
    <label for="promocion_id" class="control-label">{{ 'Promocion Id' }}</label>
    <input class="form-control" name="promocion_id" type="number" id="promocion_id" value="{{ isset($pasajero->promocion_id) ? $pasajero->promocion_id : ''}}" >
    {!! $errors->first('promocion_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
