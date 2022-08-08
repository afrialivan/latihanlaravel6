@extends('layouts.main')

@section('container')
    
<form action="/edit/{{ $post->slug }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $post->title }}">
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">slug</label>
    <input type="text" name="slug" class="form-control" id="slug" aria-describedby="emailHelp" value="{{ $post->slug }}">
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">body</label>
    <input type="text" name="body" class="form-control" id="body" aria-describedby="emailHelp" value="{{ $post->body }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection