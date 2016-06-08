@extends('admin.body')
@section('title', 'Новости')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/news') }}">Новости</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Редактирование новости </small> </h1>
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
    {{ Form::open(['url' => 'admin/news', 'class' => 'form-horizontal']) }}
    @else
    {{ Form::open(['url' => 'admin/news/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
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
            <div class="form-group">
                {{ Form::label('categories', 'Теги', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-8">
                    <select multiple data-placeholder="выберите категорию" id="chosencat" name="chosencat[]" class="tag-input-style col-xs-12">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}" @if (in_array($tag->id, isset($data) ? $data->getTagsIdsArray() : array())) selected="selected" @endif>
                            {{ $tag->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-1">
                    <a href="javascript:AddTag();" class="btn btn-sm btn-primary"><i class="ace-icon fa fa-plus-circle"></i></a>
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
            @if (isset($data->updated_at))
                <div class="form-group">
                    <label class="col-sm-6 control-label no-padding-right"> Изменен: {{ $data->updated_at }}</label>
                </div>
            @endif
        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
    <div class="space"></div>
    <div class="tabbable">
        <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
            <li class="active">
                <a href="#ru" data-toggle="tab">Описание</a>
            </li>
            <li>
                <a href="#photos" data-toggle="tab">Фото</a>
            </li>
            <li>
                <a href="#meta" data-toggle="tab">META</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="ru">
                {{ Form::textarea('description', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => 'editor')) }}
            </div>
            @include('admin.partials.meta')
            @include('admin.partials.photos', ['table' => 'news', 'table_id' => isset($data->id) ? $data->id : 0])
        </div>
    </div>

    <div class="form-actions">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>

    {{ Form::close() }}

    <!--! popup tag insert -->
    <div aria-hidden="true" aria-labelledby="mySmallModalLabel" role="dialog" tabindex="-1" data-show="true" data-backdrop="true" data-keyboard="true" class="modal fade" id="add-tag-modal" >
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Введите новый тег</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input class="form-control" type="text" name="tag_name" />
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="btn btn-default" >Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /popup tag insert-->

@endsection

@section('styles')
    {!! HTML::style('ace/assets/css/datepicker.css') !!}
    {!! HTML::style('ace/assets/css/chosen.css') !!}
@endsection

@section('scripts')

    @include('admin.partials.ckeditor')

    @include('admin.partials.slug',['input_name'=>'name'])

    {!! HTML::script('ace/assets/js/date-time/bootstrap-datepicker.js') !!}
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
        });

        function AddTag(){
            var modal = $('#add-tag-modal');
            modal.modal();
            modal.find('button.btn-default').click(function(){
                var value = modal.find('input[name=tag_name]').val();
                $.get("admin/json/addtag",
                        {
                            'value': value
                        },
                        function(response){
                            if (response.success=="false"){
                                toastr.error(response.data);
                                return;
                            }

                            var id = response.data;
                            $('#chosencat').append('<option value="'+id+'" selected="selected">'+value+'</option>');
                            $("#chosencat").trigger("chosen:updated");
                            toastr.success("Тег добавлен");
                            modal.modal('toggle');
                        }
                ), "json";
            });
        }
    </script>

    {!! HTML::script('ace/assets/js/chosen.jquery.min.js') !!}
    <script>
        $("#chosencat").chosen();
    </script>
@endsection