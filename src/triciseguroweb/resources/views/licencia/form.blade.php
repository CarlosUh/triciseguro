<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($licencia->nombre) ? $licencia->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($licencia->apellido) ? $licencia->apellido : ''}}" required>
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('curp') ? 'has-error' : ''}}">
    <label for="curp" class="control-label">{{ 'Curp' }}</label>
    <input class="form-control" name="curp" type="text" id="curp" value="{{ isset($licencia->curp) ? $licencia->curp : ''}}" required>
    {!! $errors->first('curp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nacionalidad') ? 'has-error' : ''}}">
    <label for="nacionalidad" class="control-label">{{ 'Nacionalidad' }}</label>
    <input class="form-control" name="nacionalidad" type="text" id="nacionalidad" value="{{ isset($licencia->nacionalidad) ? $licencia->nacionalidad : ''}}" >
    {!! $errors->first('nacionalidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_expedicion') ? 'has-error' : ''}}">
    <label for="fecha_expedicion" class="control-label">{{ 'Fecha Expedicion' }}</label>
    <input class="form-control" name="fecha_expedicion" type="date" id="fecha_expedicion" value="{{ isset($licencia->fecha_expedicion) ? $licencia->fecha_expedicion : ''}}" >
    {!! $errors->first('fecha_expedicion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_vencimiento') ? 'has-error' : ''}}">
    <label for="fecha_vencimiento" class="control-label">{{ 'Fecha Vencimiento' }}</label>
    <input class="form-control" name="fecha_vencimiento" type="date" id="fecha_vencimiento" value="{{ isset($licencia->fecha_vencimiento) ? $licencia->fecha_vencimiento : ''}}" >
    {!! $errors->first('fecha_vencimiento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('periodo') ? 'has-error' : ''}}">
    <label for="periodo" class="control-label">{{ 'Periodo' }}</label>
    <input class="form-control" name="periodo" type="number" id="periodo" value="{{ isset($licencia->periodo) ? $licencia->periodo : ''}}" >
    {!! $errors->first('periodo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
