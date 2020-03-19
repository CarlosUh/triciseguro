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
<div class="form-group {{ $errors->has('persona_id') ? 'has-error' : ''}}">
    <label for="persona_id" class="control-label">{{ 'Persona Id' }}</label>
    <input class="form-control" name="persona_id" type="number" id="persona_id" value="{{ isset($notificacion->persona_id) ? $notificacion->persona_id : ''}}" required>
    {!! $errors->first('persona_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
