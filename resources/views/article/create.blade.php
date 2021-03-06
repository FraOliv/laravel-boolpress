@extends('layouts.app')

@section('title')
 Home
    
@endsection
@section('main_content')

<h1>Create</h1>
<form action="{{route('article.store')}}" method="post">
    @csrf
    @method('POST')
   

    <div class="form-group">
    
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert Title</small>
</div>
  <div class="form-group">
    <label for="subtitle">subtitle</label>
    <textarea class="form-control" name="subtitle" id="subtitle" rows="3" required></textarea>
    <small class="text-muted">Inserisci il author del post</small>
  </div>
 <div class="form-group">
   <label for="categories">categories</label>
     <select class="form-control" name="category_id" id="">
            @foreach($categories as $item)

            <option value="{{$item->id}}" name="category_id">
            {{$item->genre}}
            </option>
            @endforeach

        </select>
 </div>
 <div class="form-group">
   <label for="over18">is this Article for Adults?</label>
     <select class="form-control" name="category_id" id="">
            @foreach($categories as $item)

            <option value="{{$item->id}}" name="category_id">
            {{$item->over18 ? 'si' : 'no'}}
            </option>
            @endforeach

        </select>
 </div>
  

    <div class="form-group">
    <label for="author">Author</label>
    <textarea class="form-control" name="author" id="author" rows="3" required></textarea>
    <small class="text-muted">Inserisci il author del post</small>
  </div>
    <div class="form-group">
    <label for="reading_time">Reading time</label>
    <textarea class="form-control" name="reading_time" id="reading_time" rows="3" required></textarea>
    <small class="text-muted">Inserisci il reading_time del post</small>
  </div>


  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body" rows="3" required></textarea>
    <small class="text-muted">Inserisci il body del post</small>
  </div>
  
  <div class="form-group">
    <label for="tags">Tags</label>
    <select class="form-control" name="tags[]" id="tags" multiple>
    @foreach ($tags as $tag)
     <option value="{{$tag->id}}"> {{$tag->name}}</option>
     
        
    @endforeach
    </select>
  </div>

<button type="submit" class="btn btn-primary">
    Submit
</button>

</form>
@endsection