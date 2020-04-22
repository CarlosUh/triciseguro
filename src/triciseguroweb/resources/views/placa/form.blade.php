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
    <input class="form-control" name="tamanio" type="text" id="tamanio" value="{{ isset($placa->tamanio) ? $placa->tamanio : ''}}" >
    {!! $errors->first('tamanio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mototaxi_id') ? 'has-error' : ''}}">
    <label for="mototaxi_id" class="control-label">{{ 'Mototaxi Id' }}</label>
    <input class="form-control" name="mototaxi_id" type="number" id="mototaxi_id" value="{{ isset($placa->mototaxi_id) ? $placa->mototaxi_id : ''}}" >
    {!! $errors->first('mototaxi_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
