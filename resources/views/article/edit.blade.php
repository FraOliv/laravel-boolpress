@extends('layouts.app')
@section('title')
Edit
    
@endsection
@section('main_content')

<form action="{{route('article.update', ['article'=>$article->id])}}" method="post">
   

    <div class="form-group">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$article->title}}" id="title" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert Title</small>
</div>


<div class="form-group">
    <label for="subtitle">subtitle</label>
    <input type="text" name="body" value="{{$article->subtitle}}" id="subtitle" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert subtitle</small>
</div>
<div class="form-group">
    <label for="author">author</label>
     <input type="text" name="author" value="{{$article->author}}" id="author" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert author</small>
  </div>
  <div class="form-group">
    <label for="body">body</label>
     <input type="text" name="body" value="{{$article->body}}" id="body" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert body</small>
  </div>
    <div class="form-group">
    <label for="reading_time">reading_time</label>
     <input type="text" name="reading_time" value="{{$article->reading_time}}" id="reading_time" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert reading_time</small>
  </div>


<button type="submit" class="btn btn-primary">
    Submit
</button>

</form>
@endsection