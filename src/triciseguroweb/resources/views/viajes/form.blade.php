<div class="form-group {{ $errors->has('idSolicitud') ? 'has-error' : ''}}">
    <label for="idSolicitud" class="control-label">{{ 'Idsolicitud' }}</label>
    <input class="form-control" name="idSolicitud" type="number" id="idSolicitud" value="{{ isset($viaje->idSolicitud) ? $viaje->idSolicitud : ''}}" >
    {!! $errors->first('idSolicitud', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
