   <div class="form-group {{ $errors->has('credencial_id') ? 'has-error' : ''}}">
    <label for="credencial_id" class="control-label">{{ 'Credencial' }}</label>
      <div class="Form">
     
        {!!Form::select('credencial_id', App\Credencial::all()->pluck('nombre', 'id'),null,['class' => 'form-control'])!!}
        {!! $errors->first('credencial_id', '<p class="help-block">:message</p>') !!}
       
    </div>
    </div>
   <div class="form-group {{ $errors->has('licencia_id') ? 'has-error' : ''}}">
    <label for="licencia_id" class="control-label">{{ 'Licencia' }}</label>
      <div class="Form">
     
        {!!Form::select('licencia_id', App\Licencia::all()->pluck('nombre', 'id'),null,['class' => 'form-control'])!!}
        {!! $errors->first('licencia_id', '<p class="help-block">:message</p>') !!}
       
    </div>
    </div>
   <div class="form-group {{ $errors->has('comprobante_pago_id') ? 'has-error' : ''}}">
    <label for="comprobante_pago_id" class="control-label">{{ 'Comprobante de pago' }}</label>
      <div class="Form">
     
        {!!Form::select('comprobante_pago_id', App\comprobante_pago::all()->pluck('nombre', 'id'),null,['class' => 'form-control'])!!}
        {!! $errors->first('comprobante_pago_id', '<p class="help-block">:message</p>') !!}
       
    </div>
    </div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
