<div class="form-group {{ $errors->has('orien') ? 'has-error' : ''}}">
    <label for="orien" class="control-label">{{ 'Orien' }}</label>
    <input class="form-control" name="orien" type="text" id="orien" value="{{ isset($rutum->orien) ? $rutum->orien : ''}}" >
    {!! $errors->first('orien', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('destino') ? 'has-error' : ''}}">
    <label for="destino" class="control-label">{{ 'Destino' }}</label>
    <input class="form-control" name="destino" type="text" id="destino" value="{{ isset($rutum->destino) ? $rutum->destino : ''}}" >
    {!! $errors->first('destino', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
