@extends('layouts.app')

@section('content')
  <div class="post">
    <div class="box">
      @auth
        @if (auth()->user()->id === $post->user_id)
          <div id="control">
            <a href="{{ route('posts.edit', ['id' => $post->id]) }}">Edit</a>
            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button id="delete" type="submit">Delete</button>
            </form>
          </div>
        @endif
      @endauth
      <p id="category">{{ $post->category }}</p>
      <h3 id="title">{{ $post->title }}</h3>
      <small id="date">{{ $post->created_at }} by {{ $post->user->name }}</small>
      <p id="content">{{ $post->content }}</p>
    </div>
  </div>
@endsection