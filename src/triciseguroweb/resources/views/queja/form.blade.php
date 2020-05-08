<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($queja->nombre) ? $queja->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('taxista_id') ? 'has-error' : ''}}">
    <label for="taxista_id" class="control-label">{{ 'Taxista_id' }}</label>
    <input class="form-control" name="taxista_id" type="text" id="taxista_id" value="{{ isset($queja->taxista_id) ? $queja->taxista_id : ''}}" >
    {!! $errors->first('taxista_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comentario') ? 'has-error' : ''}}">
    <label for="comentario" class="control-label">{{ 'Comentario' }}</label>
    <input class="form-control" name="comentario" type="text" id="comentario" value="{{ isset($queja->comentario) ? $queja->comentario : ''}}" >
    {!! $errors->first('comentario', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
