@extends('layouts.app')

@section('content')
  <div class="post">
    <div class="box">
      <p id="category">{{ $post->category }}</p>
      <h3 id="title">{{ $post->title }}</h3>
      <small id="date">{{ $post->created_at }} by {{ $post->user->name }}</small>
      <p id="content">{{ $post->content }}</p>
    </div>
  </div>
@endsection