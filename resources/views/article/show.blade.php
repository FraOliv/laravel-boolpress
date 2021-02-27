@extends('layouts.app')

@section('title')

Descrizione Post
    
@endsection


@section('main_content')

<div class="container" class="d-flex">
    <div>Title: {{$article->title}}</div>
    <div>Subtitle: {{$article->subtitle}}</div>
    <div>Author: {{$article->author}}</div>
    <div>Body: {{$article->body}}</div>
    <div> reading time: {{$article->reading_time}} minutes</div>
    <div>Category genre: {{optional($article->category)->genre}} </div>
    <div>Article for adults: {{$article->category ? $article->category->over18 ? 'si' : 'no' : ""}}</div>

        @if(count($article->tags) > 0)
        @foreach ($article->tags as $tag)
        <div>Tag name: {{ $tag->name }}</div>
        <div>Tag views number:{{ $tag->views }}</div> 
        <div>Tag shares number:
            {{ $tag->shares }}
            </div> 
        @endforeach
        @else 
            no tag in here
        @endif
</div>

    
@endsection