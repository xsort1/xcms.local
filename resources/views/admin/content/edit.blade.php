@extends('admin.body')
@section('title', 'Контент')

@section('centerbox')
<div class="page-header">
    <h1> <a href="{{ URL::to('admin/content') }}">Контент</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Редактирование страницы </small> </h1>
</div>

@include('admin.partials.errors')

@if(!isset($data))
{{ Form::open(array('url' => 'admin/content')) }}
@else
{{ Form::open(array('url' => 'admin/content/' . $data->id, 'method' => 'put')) }}
@endif
    <!--<div class="form-group col-xs-12">
        <button id="submit_button1" type="submit" class="btn  btn-success" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
    </div>-->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('name', 'Заголовок', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                 {{ Form::label('slug', 'URL', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">
            <div class="form-group">
                <label for="mydate" class="col-sm-3 control-label no-padding-right"> Дата:</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="date" name="date" id="mydate" class="form-control date-picker"
                               data-date-format="dd-mm-yyyy"
                               value="{{ (isset($data->created_at) ? $data->created_at : old('date', Date::now()->format('d-m-Y'))) }}" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar bigger-110"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
    <div class="space"></div>
    <div class="tabbable">
        <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
            <li class="active">
                <a href="#ru" data-toggle="tab">Описание</a>
            </li>
            <li>
                <a href="#meta" data-toggle="tab">META</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="ru">
                {{ Form::textarea('description', old('description'), array('class' => 'ckeditor')) }}
            </div>
            <div class="tab-pane row" id="meta">
                <div class="form-group">
                    {{ Form::label('meta_description', 'META description:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                    <div class="col-sm-10">
                        {{ Form::textarea('meta_description', old('meta_description'), array('class' => 'col-xs-12')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('meta_keywords', 'META keywords:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                    <div class="col-sm-10">
                        {{ Form::textarea('meta_keywords', old('meta_keywords'), array('class' => 'col-xs-12')) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-actions">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>

{{ Form::close() }}
@endsection



@section('styles')
    {!! Html::style('ace/assets/css/datepicker.css') !!}
@endsection

@section('scripts')

    {!! Html::script('ace/assets/js/date-time/bootstrap-datepicker.js') !!}

    @include('admin.partials.slug',['input_name'=>'name'])

    <script type="text/javascript">
        jQuery(function($) {
            var mydate = $('#mydate')[0];
            if(mydate.type !== 'date') {//if browser doesn't support "date" input
                $(mydate).datepicker({
                    weekStart: 1,
                    autoclose:true,
                    language: 'ru'
                })
            }
        })
    </script>
@endsection