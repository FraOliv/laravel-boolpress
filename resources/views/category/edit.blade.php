@extends('layouts.app')
@section('title')
Edit
    
@endsection
@section('main_content')

  <h1>Edit </h1>
    <form action="{{route('category.update', ['category'=>$category->id])}}" method="post">
        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="genre">Genre</label>
            <input class="form-control" type="text" name="genre" id="genre" value="{{$category->genre}}">
        </div>
        @error('genre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="over_18">Over 18</label>
            <input class="form-control" type="text" name="over18" id="over18" value="{{$category->over_18}}">
        </div>
        @error('over_18')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   
@endsection