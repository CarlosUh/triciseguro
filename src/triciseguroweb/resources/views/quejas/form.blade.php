<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre del cliente' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($quejas->nombre) ? $quejas->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('taxista') ? 'has-error' : ''}}">
    <label for="taxista" class="control-label">{{ 'Nombre del taxista' }}</label>
    <input class="form-control" name="taxista" type="text" id="taxista" value="{{ isset($quejas->taxista) ? $quejas->taxista : ''}}" >
    {!! $errors->first('taxista', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Quejas' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" type="textarea" id="descripcion" >{{ isset($quejas->descripcion) ? $quejas->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
