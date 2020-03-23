<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($placa->nombre) ? $placa->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('color') ? 'has-error' : ''}}">
    <label for="color" class="control-label">{{ 'Color' }}</label>
    <input class="form-control" name="color" type="text" id="color" value="{{ isset($placa->color) ? $placa->color : ''}}" required>
    {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tamanio') ? 'has-error' : ''}}">
    <label for="tamanio" class="control-label">{{ 'Tamanio' }}</label>
    <input class="form-control" name="tamanio" type="text" id="tamanio" value="{{ isset($placa->tamanio) ? $placa->tamanio : ''}}" required>
    {!! $errors->first('tamanio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('taxi_id') ? 'has-error' : ''}}">
    <label for="taxi_id" class="control-label">{{ 'Taxi Id' }}</label>
    <input class="form-control" name="taxi_id" type="number" id="taxi_id" value="{{ isset($placa->taxi_id) ? $placa->taxi_id : ''}}" required>
    {!! $errors->first('taxi_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
