@extends('layouts.app')

@section('title')

Descrizione Post
    
@endsection


@section('main_content')

<div class="container" class="d-flex">
    <div>{{$post->title}}</div>
     <div>{{$post->body}}</div>
</div>

    
@endsection