<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($promocion->nombre) ? $promocion->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_inicio') ? 'has-error' : ''}}">
    <label for="fecha_inicio" class="control-label">{{ 'Fecha Inicio' }}</label>
    <input class="form-control" name="fecha_inicio" type="datetime-local" id="fecha_inicio" value="{{ isset($promocion->fecha_inicio) ? $promocion->fecha_inicio : ''}}" >
    {!! $errors->first('fecha_inicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_fin') ? 'has-error' : ''}}">
    <label for="fecha_fin" class="control-label">{{ 'Fecha Fin' }}</label>
    <input class="form-control" name="fecha_fin" type="datetime-local" id="fecha_fin" value="{{ isset($promocion->fecha_fin) ? $promocion->fecha_fin : ''}}" >
    {!! $errors->first('fecha_fin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" type="textarea" id="descripcion" >{{ isset($promocion->descripcion) ? $promocion->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <select name="tipo" class="form-control" id="tipo" >
    @foreach (json_decode('{"opcion1":"valor","opcion2":"porcentaje"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($promocion->tipo) && $promocion->tipo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dato') ? 'has-error' : ''}}">
    <label for="dato" class="control-label">{{ 'Dato' }}</label>
    <input class="form-control" name="dato" type="number" id="dato" value="{{ isset($promocion->dato) ? $promocion->dato : ''}}" >
    {!! $errors->first('dato', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
