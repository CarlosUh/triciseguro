<div class="form-group {{ $errors->has('mensaje') ? 'has-error' : ''}}">
    <label for="mensaje" class="control-label">{{ 'Mensaje' }}</label>
    <textarea class="form-control" rows="5" name="mensaje" type="textarea" id="mensaje" >{{ isset($mensaje->mensaje) ? $mensaje->mensaje : ''}}</textarea>
    {!! $errors->first('mensaje', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('taxista_id') ? 'has-error' : ''}}">
    <label for="taxista_id" class="control-label">{{ 'Taxista Id' }}</label>
    <input class="form-control" name="taxista_id" type="number" id="taxista_id" value="{{ isset($mensaje->taxista_id) ? $mensaje->taxista_id : ''}}" >
    {!! $errors->first('taxista_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('solicitud_id') ? 'has-error' : ''}}">
    <label for="solicitud_id" class="control-label">{{ 'Solicitud Id' }}</label>
    <input class="form-control" name="solicitud_id" type="number" id="solicitud_id" value="{{ isset($mensaje->solicitud_id) ? $mensaje->solicitud_id : ''}}" >
    {!! $errors->first('solicitud_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
