@extends('layouts.app')

@section('title')

Descrizione Tag
    
@endsection


@section('main_content')

<div class="container" class="d-flex">
    <div>{{$tag->name}}</div>
     <div>{{$tag->views}}</div>
      <div>{{$tag->shares}}</div>
     
</div>

    
@endsection