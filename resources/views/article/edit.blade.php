@extends('layouts.app')
@section('title')
Edit
    
@endsection
@section('main_content')



 <h1>Edit: " {{$article->title}} "</h1>
    <form action="{{route('article.update', ['article'=>$article->id])}}" method="post">
        @csrf
        @method('PUT')

        {{-- title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$article->title}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- subtitle --}}
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input class="form-control" type="text" name="subtitle" id="subtitle" value="{{$article->subtitle}}">
        </div>
        @error('subtitle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        

    
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{$article->body}}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      
        <div class="form-group">
            <label for="author">Author</label>
            <input class="form-control" type="text" name="author" id="author" value="{{$article->author}}">
        </div>
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
                <div class="form-group">
            <label for="reading_time">Reading time</label>
           {{--  <input class="form-control" type="text" name="reading_time" id="reading_time" value="{{$article->reading_time}}"> --}}
            <input type="number" name="reading_time" id="reading_time" class="form-control" value="{{$article->reading_time}}">
        </div>
        @error('reading_time')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
  <div class="form-group">
    <label for="tags">Tags</label>
    <select class="form-control" name="tags[]" id="tags" multiple>
    @foreach ($tags as $tag)
     <option value="{{$tag->id}}"> {{$tag->name}}</option>
    @endforeach
    </select>
  </div>
        @error('tags')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection