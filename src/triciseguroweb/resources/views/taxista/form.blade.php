<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($taxistum->nombre) ? $taxistum->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pasajero') ? 'has-error' : ''}}">
    <label for="pasajero" class="control-label">{{ 'Pasajero' }}</label>
    <input class="form-control" name="pasajero" type="text" id="pasajero" value="{{ isset($taxistum->pasajero) ? $taxistum->pasajero : ''}}" >
    {!! $errors->first('pasajero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quejas') ? 'has-error' : ''}}">
    <label for="quejas" class="control-label">{{ 'Quejas' }}</label>
    <input class="form-control" name="quejas" type="text" id="quejas" value="{{ isset($taxistum->quejas) ? $taxistum->quejas : ''}}" >
    {!! $errors->first('quejas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ruta') ? 'has-error' : ''}}">
    <label for="ruta" class="control-label">{{ 'Ruta' }}</label>
    <input class="form-control" name="ruta" type="text" id="ruta" value="{{ isset($taxistum->ruta) ? $taxistum->ruta : ''}}" >
    {!! $errors->first('ruta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mototaxi') ? 'has-error' : ''}}">
    <label for="mototaxi" class="control-label">{{ 'Mototaxi' }}</label>
    <input class="form-control" name="mototaxi" type="text" id="mototaxi" value="{{ isset($taxistum->mototaxi) ? $taxistum->mototaxi : ''}}" >
    {!! $errors->first('mototaxi', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
