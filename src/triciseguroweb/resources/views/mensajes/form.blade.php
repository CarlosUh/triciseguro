<div class="form-group {{ $errors->has('Mensaje') ? 'has-error' : ''}}">
    <label for="Mensaje" class="control-label">{{ 'Mensaje' }}</label>
    <textarea class="form-control" rows="5" name="Mensaje" type="textarea" id="Mensaje" >{{ isset($mensaje->Mensaje) ? $mensaje->Mensaje : ''}}</textarea>
    {!! $errors->first('Mensaje', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
