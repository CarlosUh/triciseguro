<div class="form-group {{ $errors->has('servicio') ? 'has-error' : ''}}">
    <label for="servicio" class="control-label">{{ 'Servicio' }}</label>
    <textarea class="form-control" rows="5" name="servicio" type="textarea" id="servicio" >{{ isset($calificacione->servicio) ? $calificacione->servicio : ''}}</textarea>
    {!! $errors->first('servicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calificacion') ? 'has-error' : ''}}">
    <label for="calificacion" class="control-label">{{ 'Calificacion' }}</label>
    <textarea class="form-control" rows="5" name="calificacion" type="textarea" id="calificacion" >{{ isset($calificacione->calificacion) ? $calificacione->calificacion : ''}}</textarea>
    {!! $errors->first('calificacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('taxista_id') ? 'has-error' : ''}}">
    <label for="taxista_id" class="control-label">{{ 'Taxista Id' }}</label>
    <input class="form-control" name="taxista_id" type="number" id="taxista_id" value="{{ isset($calificacione->taxista_id) ? $calificacione->taxista_id : ''}}" >
    {!! $errors->first('taxista_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
