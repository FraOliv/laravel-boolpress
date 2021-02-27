@extends('layouts.app')

@section('title')
Tags 
    
@endsection
@section('main_content')

<a href="{{route('tag.create')}}" class="btn btn-dark">
    Create a new tag
</a>
<table class="table">
    <thead>
        <tr>
            <th>tag name:</th>
            <th>tag views:</th>
            <th>tag shares:</th>
            <th>Actions</th>
        </tr>



    </thead>




<tbody>
    @forelse ($tags as $value)
    <tr>
        <td>{{$value->name}}</td>
        <td>{{$value->views}}</td>
        <td>{{$value->shares}}</td>
        <td>
            <a href="{{route('tag.show', ['tag'=>$value->id])}}">View</a>
            <a href="{{route('tag.edit', ['tag'=>$value->id])}}">Edit</a>
            <form action="{{route('tag.destroy', ['tag'=>$value->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"> Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td>no Tags in here</td>
    </tr>
    @endforelse
</tbody>
</table>
    
@endsection