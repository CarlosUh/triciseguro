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
<div class="form-group {{ $errors->has('origen') ? 'has-error' : ''}}">
    <label for="origen" class="control-label">{{ 'Origen' }}</label>
    <input class="form-control" name="origen" type="number" id="origen" value="{{ isset($notificacion->origen) ? $notificacion->origen : ''}}" >
    {!! $errors->first('origen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('destino') ? 'has-error' : ''}}">
    <label for="destino" class="control-label">{{ 'Destino' }}</label>
    <input class="form-control" name="destino" type="number" id="destino" value="{{ isset($notificacion->destino) ? $notificacion->destino : ''}}" >
    {!! $errors->first('destino', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
