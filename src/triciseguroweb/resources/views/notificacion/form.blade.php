<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="text" id="tipo" value="{{ isset($notificacion->tipo) ? $notificacion->tipo : ''}}" >
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mensaje') ? 'has-error' : ''}}">
    <label for="mensaje" class="control-label">{{ 'Mensaje' }}</label>
    <textarea class="form-control" rows="5" name="mensaje" type="textarea" id="mensaje" >{{ isset($notificacion->mensaje) ? $notificacion->mensaje : ''}}</textarea>
    {!! $errors->first('mensaje', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('origen_id') ? 'has-error' : ''}}">
    <label for="origen_id" class="control-label">{{ 'Origen Id' }}</label>
    <input class="form-control" name="origen_id" type="number" id="origen_id" value="{{ isset($notificacion->origen_id) ? $notificacion->origen_id : ''}}" >
    {!! $errors->first('origen_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('destino_id') ? 'has-error' : ''}}">
    <label for="destino_id" class="control-label">{{ 'Destino Id' }}</label>
    <input class="form-control" name="destino_id" type="number" id="destino_id" value="{{ isset($notificacion->destino_id) ? $notificacion->destino_id : ''}}" >
    {!! $errors->first('destino_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
