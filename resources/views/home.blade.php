@extends('layouts.app')

@section('content')
  <div class="postfeed">
    @foreach ($posts as $post)
      <div class="post">
        <div class="box">
          <p id="category">{{ $post->category }}</p>
          <h3 id="title">{{ $post->title }}</h3>
          <small id="date">{{ $post->created_at }} by {{ $post->user }}</small>
          <p id="content">{{ $post->content }}</p>
        </div>
      </div>
    @endforeach
  </div>
@endsection