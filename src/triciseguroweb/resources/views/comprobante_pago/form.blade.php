<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="date" id="fecha" value="{{ isset($comprobante_pago->fecha) ? $comprobante_pago->fecha : ''}}" required>
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hora') ? 'has-error' : ''}}">
    <label for="hora" class="control-label">{{ 'Hora' }}</label>
    <input class="form-control" name="hora" type="time" id="hora" value="{{ isset($comprobante_pago->hora) ? $comprobante_pago->hora : ''}}" >
    {!! $errors->first('hora', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($comprobante_pago->cantidad) ? $comprobante_pago->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" type="textarea" id="descripcion" >{{ isset($comprobante_pago->descripcion) ? $comprobante_pago->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('formapago') ? 'has-error' : ''}}">
    <label for="formapago" class="control-label">{{ 'Formapago' }}</label>
    <textarea class="form-control" rows="5" name="formapago" type="textarea" id="formapago" >{{ isset($comprobante_pago->formapago) ? $comprobante_pago->formapago : ''}}</textarea>
    {!! $errors->first('formapago', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
