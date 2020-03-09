<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($ubicacione->nombre) ? $ubicacione->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('latitude') ? 'has-error' : ''}}">
    <label for="latitude" class="control-label">{{ 'Latitude' }}</label>
    <input class="form-control" name="latitude" type="number" id="latitude" value="{{ isset($ubicacione->latitude) ? $ubicacione->latitude : ''}}" >
    {!! $errors->first('latitude', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('longitud') ? 'has-error' : ''}}">
    <label for="longitud" class="control-label">{{ 'Longitud' }}</label>
    <input class="form-control" name="longitud" type="number" id="longitud" value="{{ isset($ubicacione->longitud) ? $ubicacione->longitud : ''}}" >
    {!! $errors->first('longitud', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" required>{{ isset($ubicacione->description) ? $ubicacione->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('persona_id') ? 'has-error' : ''}}">
    <label for="persona_id" class="control-label">{{ 'Persona Id' }}</label>
    <input class="form-control" name="persona_id" type="number" id="persona_id" value="{{ isset($ubicacione->persona_id) ? $ubicacione->persona_id : ''}}" >
    {!! $errors->first('persona_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
