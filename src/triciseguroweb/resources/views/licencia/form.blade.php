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
<div class="form-group {{ $errors->has('vigencia') ? 'has-error' : ''}}">
    <label for="vigencia" class="control-label">{{ 'Vigencia' }}</label>
    <input class="form-control" name="vigencia" type="number" id="vigencia" value="{{ isset($licencia->vigencia) ? $licencia->vigencia : ''}}" >
    {!! $errors->first('vigencia', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
