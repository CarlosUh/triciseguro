<div class="form-group {{ $errors->has('comentario') ? 'has-error' : ''}}">
    <label for="comentario" class="control-label">{{ 'Comentario' }}</label>
    <input class="form-control" name="comentario" type="text" id="comentario" value="{{ isset($viaje->comentario) ? $viaje->comentario : ''}}" required>
    {!! $errors->first('comentario', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
