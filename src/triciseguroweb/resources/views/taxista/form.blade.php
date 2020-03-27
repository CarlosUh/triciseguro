<div class="form-group {{ $errors->has('none') ? 'has-error' : ''}}">
    <label for="none" class="control-label">{{ 'None' }}</label>
    <input class="form-control" name="none" type="text" id="none" value="{{ isset($taxistum->none) ? $taxistum->none : ''}}" >
    {!! $errors->first('none', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
