@extends('layouts.app')

@section('title')
Article 
    
@endsection
@section('main_content')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Actions</th>
        </tr>



    </thead>




<tbody>
    @forelse ($articles as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->title}}</td>
         <td>{{$value->author}}</td>
         <td>{{$value->subtitle}}</td>
        <td>{{$value->body}}</td>
         <td>{{$value->reading_time}}</td>
    </tr>
    @empty
    <tr>
        <td>no articles in here</td>
    </tr>
    @endforelse
</tbody>
</table>
    
@endsection