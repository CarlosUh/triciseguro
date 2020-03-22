<div class="form-group {{ $errors->has('taxista') ? 'has-error' : ''}}">
    <label for="taxista" class="control-label">{{ 'Taxista' }}</label>
    <textarea class="form-control" rows="5" name="taxista" type="textarea" id="taxista" >{{ isset($calificacion->taxista) ? $calificacion->taxista : ''}}</textarea>
    {!! $errors->first('taxista', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('servicio') ? 'has-error' : ''}}">
    <label for="servicio" class="control-label">{{ 'Servicio' }}</label>
    <textarea class="form-control" rows="5" name="servicio" type="textarea" id="servicio" >{{ isset($calificacion->servicio) ? $calificacion->servicio : ''}}</textarea>
    {!! $errors->first('servicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calificacion') ? 'has-error' : ''}}">
    <label for="calificacion" class="control-label">{{ 'Calificacion' }}</label>
    <textarea class="form-control" rows="5" name="calificacion" type="textarea" id="calificacion" >{{ isset($calificacion->calificacion) ? $calificacion->calificacion : ''}}</textarea>
    {!! $errors->first('calificacion', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
