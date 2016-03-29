@extends('body')
@section('content')
    @if($news->count())
        @foreach($news as $news)
            <article>
                <h2>{{ $news->name }}</h2>
                <p>{{ $news->description, 50 }}</p>
                <a href='{{ URL::route('get-news', $news->slug) }}'>Читать далее...</a>
            </article>
        @endforeach
    @endif
@stop