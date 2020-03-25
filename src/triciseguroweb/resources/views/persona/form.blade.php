<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($persona->nombre) ? $persona->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($persona->apellido) ? $persona->apellido : ''}}" required>
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('f_nacimiento') ? 'has-error' : ''}}">
    <label for="f_nacimiento" class="control-label">{{ 'F Nacimiento' }}</label>
    <input class="form-control" name="f_nacimiento" type="text" id="f_nacimiento" value="{{ isset($persona->f_nacimiento) ? $persona->f_nacimiento : ''}}" required>
    {!! $errors->first('f_nacimiento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('genero') ? 'has-error' : ''}}">
    <label for="genero" class="control-label">{{ 'Genero' }}</label>
    <input class="form-control" name="genero" type="text" id="genero" value="{{ isset($persona->genero) ? $persona->genero : ''}}" required>
    {!! $errors->first('genero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($persona->direccion) ? $persona->direccion : ''}}" required>
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($persona->telefono) ? $persona->telefono : ''}}" required>
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
