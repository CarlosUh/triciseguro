<div class="form-group {{ $errors->has('credencial_id') ? 'has-error' : ''}}">
    <label for="credencial_id" class="control-label">{{ 'Credencial Id' }}</label>
    <input class="form-control" name="credencial_id" type="number" id="credencial_id" value="{{ isset($documento->credencial_id) ? $documento->credencial_id : ''}}" required>
    {!! $errors->first('credencial_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cuota_id') ? 'has-error' : ''}}">
    <label for="cuota_id" class="control-label">{{ 'Cuota Id' }}</label>
    <input class="form-control" name="cuota_id" type="number" id="cuota_id" value="{{ isset($documento->cuota_id) ? $documento->cuota_id : ''}}" required>
    {!! $errors->first('cuota_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('licencia_id') ? 'has-error' : ''}}">
    <label for="licencia_id" class="control-label">{{ 'Licencia Id' }}</label>
    <input class="form-control" name="licencia_id" type="number" id="licencia_id" value="{{ isset($documento->licencia_id) ? $documento->licencia_id : ''}}" required>
    {!! $errors->first('licencia_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comprobante_pago_id') ? 'has-error' : ''}}">
    <label for="comprobante_pago_id" class="control-label">{{ 'Comprobante Pago Id' }}</label>
    <input class="form-control" name="comprobante_pago_id" type="number" id="comprobante_pago_id" value="{{ isset($documento->comprobante_pago_id) ? $documento->comprobante_pago_id : ''}}" required>
    {!! $errors->first('comprobante_pago_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
