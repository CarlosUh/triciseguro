<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($credencial->nombre) ? $credencial->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula') ? 'has-error' : ''}}">
    <label for="matricula" class="control-label">{{ 'Matricula' }}</label>
    <textarea class="form-control" rows="5" name="matricula" type="textarea" id="matricula" >{{ isset($credencial->matricula) ? $credencial->matricula : ''}}</textarea>
    {!! $errors->first('matricula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vigencia') ? 'has-error' : ''}}">
    <label for="vigencia" class="control-label">{{ 'Vigencia' }}</label>
    <input class="form-control" name="vigencia" type="date" id="vigencia" value="{{ isset($credencial->vigencia) ? $credencial->vigencia : ''}}" >
    {!! $errors->first('vigencia', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
