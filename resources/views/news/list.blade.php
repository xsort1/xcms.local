@extends('body')

@section('centerbox')
    @if (isset($tag))
        <div class="row">
            <div class="column column-1-2">
                <h3 class="box-header uppercase">Новости по тегу: {{ $tag->name }}</h3>
            </div>
        </div>
    @endif
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
                @foreach($n->tags as $tag)
                    <li>
                        <a href="{!!  URL::to('tags/' . $tag->id) !!}" title="{{ $tag->name }}">{{ $tag->name }}</a>@if ($tag != end($n->tags)), @endif
                    </li>
                @endforeach
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


{!! $news->render() !!}

@stop