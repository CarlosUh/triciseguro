<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($ubicacion->nombre) ? $ubicacion->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('latitud') ? 'has-error' : ''}}">
    <label for="latitud" class="control-label">{{ 'Latitud' }}</label>
    <input class="form-control" name="latitud" type="number" id="latitud" value="{{ isset($ubicacion->latitud) ? $ubicacion->latitud : ''}}" >
    {!! $errors->first('latitud', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('longitud') ? 'has-error' : ''}}">
    <label for="longitud" class="control-label">{{ 'Longitud' }}</label>
    <input class="form-control" name="longitud" type="number" id="longitud" value="{{ isset($ubicacion->longitud) ? $ubicacion->longitud : ''}}" >
    {!! $errors->first('longitud', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($ubicacion->description) ? $ubicacion->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('personas_id') ? 'has-error' : ''}}">
    <label for="personas_id" class="control-label">{{ 'Personas Id' }}</label>
    <input class="form-control" name="personas_id" type="number" id="personas_id" value="{{ isset($ubicacion->personas_id) ? $ubicacion->personas_id : ''}}" >
    {!! $errors->first('personas_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
