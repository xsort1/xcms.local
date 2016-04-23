<div class="tab-pane row" id="meta">
    <div class="form-group">
        {{ Form::label('meta_description', 'META description:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
        <div class="col-sm-10">
            {{ Form::textarea('meta_description', (isset($data->meta_description) ? $data->meta_description : old('meta_description')), array('class' => 'col-xs-10', 'rows'=> 5)) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('meta_keywords', 'META keywords:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
        <div class="col-sm-10">
            {{ Form::textarea('meta_keywords', (isset($data->meta_keywords) ? $data->meta_keywords : old('meta_keywords')), array('class' => 'col-xs-10','rows'=> 5)) }}
        </div>
    </div>
</div>