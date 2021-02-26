@extends('layouts.app')

@section('title')
Categories 
    
@endsection
@section('main_content')

<a href="{{route('category.create')}}" class="btn btn-dark">
    Create a new Category
</a>
<table class="table">
    <thead>
        <tr>
            <th>Category Genre:</th>
            <th>Category Over18</th>
            <th>Actions</th>
        </tr>



    </thead>




<tbody>
    @forelse ($categories as $value)
    <tr>
        <td>{{$value->genre}}</td>
        <td>{{$value->over18 ? 'si' : 'no'}}</td>
      
        <td>
            <a href="{{route('category.show', ['category'=>$value->id])}}">View</a>
            <a href="{{route('category.edit', ['category'=>$value->id])}}">Edit</a>
            <form action="{{route('category.destroy', ['category'=>$value->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"> Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td>no categories in here</td>
    </tr>
    @endforelse
</tbody>
</table>
    
@endsection