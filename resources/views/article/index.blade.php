@extends('layouts.app')

@section('title')
Article 
    
@endsection
@section('main_content')

<a href="{{route('article.create')}}" class="btn btn-dark">
    Create a new Post
</a>
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
            <th>Actions</th>
        </tr>



    </thead>




<tbody>
    @forelse ($articles as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->title}}</td>
        <td>{{optional($value->category)->genre}}</td>
        <td>{{$value->category ? $value->category->over18 ? 'si' : 'no' : ""}}</td>
        <td>{{$value->author}}</td>
        <td>{{$value->subtitle}}</td>
        <td>{{$value->body}}</td>
        <td>{{$value->reading_time}}</td>
        <td>
            <a href="{{route('article.show', ['article'=>$value->id])}}">View</a>
            <a href="{{route('article.edit', ['article'=>$value->id])}}">Edit</a>
            <form action="{{route('article.destroy', ['article'=>$value->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"> Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td>no articles in here</td>
    </tr>
    @endforelse
</tbody>
</table>
    
@endsection