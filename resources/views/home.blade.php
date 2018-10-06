@extends('layouts.app')

@section('content')
  <div class="postfeed">
    @foreach ($posts as $post)
      <div class="post">
        <div class="box">
          <p id="category">{{ $post->category }}</p>
          <h3 id="title"><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
          <small id="date">{{ $post->created_at }} by {{ $post->user->name }}</small>
          <p id="content">{{ substr($post->content, 0, 200) }}...</p>
        </div>
      </div>
    @endforeach
  </div>
@endsection