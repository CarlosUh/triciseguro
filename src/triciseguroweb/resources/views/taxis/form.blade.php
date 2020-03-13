<div class="form-group {{ $errors->has('marca') ? 'has-error' : ''}}">
    <label for="marca" class="control-label">{{ 'Marca' }}</label>
    <input class="form-control" name="marca" type="text" id="marca" value="{{ isset($taxi->marca) ? $taxi->marca : ''}}" required>
    {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
    <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
    <input class="form-control" name="modelo" type="text" id="modelo" value="{{ isset($taxi->modelo) ? $taxi->modelo : ''}}" >
    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula') ? 'has-error' : ''}}">
    <label for="matricula" class="control-label">{{ 'Matricula' }}</label>
    <input class="form-control" name="matricula" type="text" id="matricula" value="{{ isset($taxi->matricula) ? $taxi->matricula : ''}}" >
    {!! $errors->first('matricula', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
