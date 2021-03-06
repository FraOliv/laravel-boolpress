@extends('layouts.app')

@section('title')
 Home
    
@endsection
@section('main_content')

   <h1>Create a new Category</h1>

 

    <form action="{{route('category.store')}}" method="post">
        @csrf
      
        <div class="form-group">
            <label for="genre">Genre</label>
            <input class="form-control" type="text" name="genre" id="genre" value="{{ old('genre')}}">
        </div>
        @error('genre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- over_18 --}}
        <div class="form-group">
            <label for="over_18">Over 18</label>
            <input class="form-control" type="text" name="over_18" id="over_18" value="{{ old('over_18')}}">
        </div>
        @error('over_18')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection