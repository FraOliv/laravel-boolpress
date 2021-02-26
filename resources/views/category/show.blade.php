@extends('layouts.app')

@section('title')

Descrizione Category
    
@endsection


@section('main_content')

<div class="container" class="d-flex">
    <div>{{$category->genre}}</div>
     <div>{{$category->over18 ? 'si' : 'no'}}</div>
     
</div>

    
@endsection