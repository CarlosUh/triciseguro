<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($promocion->nombre) ? $promocion->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="datetime-local" id="fecha" value="{{ isset($promocion->fecha) ? $promocion->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo_promocion') ? 'has-error' : ''}}">
    <label for="tipo_promocion" class="control-label">{{ 'Tipo Promocion' }}</label>
    <textarea class="form-control" rows="5" name="tipo_promocion" type="textarea" id="tipo_promocion" >{{ isset($promocion->tipo_promocion) ? $promocion->tipo_promocion : ''}}</textarea>
    {!! $errors->first('tipo_promocion', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
