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
            <th>Category Genre</th>
            <th>Over 18</th>
            <th>Author</th>
            <th>Article's Subtitle</th>
            <th>Article's Body</th>
            <th>Reading time</th>
        </tr>



    </thead>




<tbody>
    @forelse ($articles as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->title}}</td>
        <td>{{$value->category->genre}}</td>
        <td>{{$value->category->over18 ? 'si' : 'no'}}</td>
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