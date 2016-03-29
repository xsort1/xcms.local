@extends('body')

@section('content')
    <article>
        <h1>{{ $news->name }}</h1>
        <p>Pub on {{ $news->created_at }}</p>
        <p>{{ $news->description }}</p>
    </article>
@stop