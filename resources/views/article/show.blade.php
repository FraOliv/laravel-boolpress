@extends('layouts.app')

@section('title')

Descrizione Post
    
@endsection


@section('main_content')

<div class="container" class="d-flex">
    <div>{{$article->title}}</div>
     <div>{{$article->body}}</div>
     
</div>

    
@endsection