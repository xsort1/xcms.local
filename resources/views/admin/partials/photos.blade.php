<!-- PARAMS
    photos  = array of photos
    table   = model or uniq name
    div_id  = id of tab panel (optional)
    width   = width of final photo (optional)
    height  = height of final photo (optional)
    twidth  = width of thumb (optional)
    theight = height of thumb (optional)
    table   = name of table (optional)
-->

<div class="tab-pane row" id="{{$div_id or 'photos'}}">
    <form>
        {!! csrf_field() !!}
        <div id="queue"></div>
        <input class="file_upload" name="file_upload" type="file" multiple="true"/>
    </form>
    <ul class="ace-thumbnails clearfix photos">
        @foreach ($photos as $photo)



        @endforeach
    </ul>
</div>

{{ HTML::script('ace/assets/js/uploadifive/jquery.uploadifive.min.js') }}
{{ HTML::style('ace/assets/js/uploadifive/uploadifive.css') }}

<script>
    $(document).ready(function(){
        var PHOTOS_DIV = "{{ $div_id or '#photos' }}";

        PhotosObj = new PhotosClass(PHOTOS_DIV);

        $(function() {
            $(PHOTOS_DIV).find('.file_upload').uploadifive({
                'buttonText'	   : "Добавить файлы",
                'buttonClass'	   : "btn btn-yellow",
                'height'		   : "50",
                'width'			   : "150",
                'auto'             : true,
                'removeCompleted'  : true,
                'formData'         : {
                    table:	"{{ $table }}",
                    width: 	"{{ $width or '' }}",
                    height:	"{{ $height or '' }}",
                    twidth:	"{{ $twidth or '' }}",
                    theight:"{{ $theight or '' }}",
                    //'X-CSRF-Token': $(PHOTOS_DIV).find('input[name="_token"]').val(),
                },
                //'queueID'          : 'queue',
                'uploadScript'     : 'photos/upload',
                    'onUploadComplete' : function(file, data) {
                        try{
                            var response = JSON.parse(data);
                        }catch(e){
                            toastr.error("Ошибка загрузки фотографии.");
                            return;
                        }
                        if (response.success=="false"){
                            toastr.error(response.data);
                            return;
                        }

                        // add file to the list
                        PhotosObj.ShowPhoto(response.data);
                    }
            });
        });
    });

    function PhotosClass(div){

        this.PHOTOS_DIV = div;

        var that = this;

        this.ChangeDBSort = function(a, b){
            var _asort = a.attr("sort");
            var _bsort = b.attr("sort");
            a.attr("sort",_bsort);
            b.attr("sort",_asort);
            $(a).swap(b);
            that.SortingEvent();

            return;

            _a_id = a.children('input').get(0).value;
            _b_id = b.children('input').get(0).value;
            $.get("index.php?action=admin_photo",
                    {
                        a:"changesort",
                        a_id:_a_id,
                        asort:_asort,
                        b_id:_b_id,
                        bsort:_bsort
                    },
                    function(){
                        a.attr("sort",_bsort);
                        b.attr("sort",_asort);
                        $(a).swap(b);
                    }
            );
        };

        this.GetAjaxPhotos = function(table, table_id){
            $.get(
                    "index.php?action=admin_photo",
                    {
                        a:	"getphotos",
                        t:	table,
                        cid:table_id
                    },
                    function (result) {
                        $.each(result, function(i, item) {
                            that.ShowPhoto(item);
                        });
                    },
                    "json"
            );
        },

        this.ShowPhoto = function(data){
            var photos_div      = this.PHOTOS_DIV;
            var $li             = $('<li sort="'+data.sort+'"></li>');
            var $img_href       = $('<a href="'+ data.path + data.filename + '" title="' + data.filename + '"></a>').fancybox();
            var $img            = $('<img width="150" height="150" src="'+ data.path + 'thumbs/' + data.filename + '" />');
            var $input          = $('<input type="hidden" name="photo_id[]" value ="' + data.id + '" />');
            var $tools          = $('<div class="tools"></div>');
            var $double_left    = $('<a href="javascript:void(0);" title="В начало" class="double_left"><i class="ace-icon fa fa-angle-double-left"></i></a>')
                                    .click(function(){
                                        var $curr  = $(this).closest('li');
                                        var $prev  = $curr.prev();
                                        var $first = $curr.parent().children().first();
                                        $first.before($curr);
                                        $prev.after($first);
                                    });
            var $left           = $('<a href="javascript:void(0);" title="Левее" class="left"><i class="ace-icon fa fa-angle-left"></i></a>')
                                    .click(function(){
                                        $($(this).closest('li').after($(this).closest('li').prev()));
                                    });
            var $delete         = $('<a href="javascript:void(0);" title="Удалить" data-id="' + data.id + '"><i class="ace-icon fa fa-trash-o"></i></a>')
                                    .click(function(){
                                        var id = $(this).data('id');
                                        if (confirm('Вы уверены?')) {
                                            $(this).parent().parent().remove();
                                            $.get("photos/delete", {'id': id});
                                        }
                                    });

            var $right          = $('<a href="javascript:void(0);" title="Правее" class="right"><i class="ace-icon fa fa-angle-right"></i></a>')
                                    .click(function(){
                                        $($(this).closest('li').before($(this).closest('li').next()));
                                    });
            var $double_right   = $('<a href="javascript:void(0);" title="В конец" class="double_right"><i class="ace-icon fa fa-angle-double-right "></i></a>')
                                    .click(function(){
                                        var $curr  = $(this).closest('li');
                                        var $next  = $curr.next();
                                        var $last  = $curr.parent().children().last();
                                        $last.after($curr);
                                        $next.before($last);
                                    });

            $(this.PHOTOS_DIV).find('ul.photos')
                    .append($li.append($img_href.append($img))
                            .append($input)
                            .append($tools
                                    .append($double_left)
                                    .append($left)
                                    .append($delete)
                                    .append($right)
                                    .append($double_right)));

        }
    };
</script>

