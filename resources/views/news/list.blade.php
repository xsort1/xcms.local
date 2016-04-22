@extends('body')

@section('centerbox')
<ul class="blog clearfix">
    @foreach($news as $n)
    <li>
        <ul class="post-details">
            <li class="date template-calendar">@include('partials.date',['date'=>$n->created_at])</li>
            <li class="template-eye">{{ $n->views }}</li>
            <!--<li class="template-bubble"><a href="post.html#comments-list" title="5 comments">5</a></li>-->
        </ul>
        <div class="post-content">
            <a href="{!!  URL::to('news/' . $n->slug) !!}" title="{{ $n->name }}" class="post-image">
                <img src="{!!  URL::to('images/slider/image_01.jpg') !!}" width="100%" alt="{{ $n->name }}" />
            </a>
            <ul class="post-content-details clearfix post-info">
                <!--<li>От <a href="#" title="Kevin Smith">Кевин Смит</a></li>-->
                <li><a href="#" title="Build">Нивелир</a>, <a href="#" title="Repairs">Геодзедия</a></li>
            </ul>
            <h2 class="box-header align-left" style="text-transform: uppercase;"><a href="{!!  URL::to('news/' . $n->slug) !!}">{{ $n->name }}</a></h2>
            <p>{{ strip_tags($n->description) }}</p>
            <div class="row padding-top-54 padding-bottom-17">
                <a class="more" href="{!!  URL::to('news/' . $n->slug) !!}" title="ЧИТАТЬ ДАЛЕЕ">ЧИТАТЬ ДАЛЕЕ</a>
            </div>
        </div>
    </li>
    @endforeach
</ul>
<ul class="pagination page-margin-top">
    <li class="left">
        <a href="#" title="" class="template-arrow-left-1">&nbsp;</a>
    </li>
    <li class="selected">
        <a href="#" title="">
            1
        </a>
    </li>
    <li>
        <a href="#" title="">
            2
        </a>
    </li>
    <li>
        <a href="#" title="">
            3
        </a>
    </li>
    <li class="right">
        <a href="#" title="" class="template-arrow-left-1">&nbsp;</a>
    </li>
</ul>

@stop