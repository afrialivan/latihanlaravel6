@extends('layouts.main')

@section('container')

  <a href="/edit/{{ $post->slug }}">Edit</a>
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->body }}</p>

  

@endsection