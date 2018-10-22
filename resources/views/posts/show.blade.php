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
      <small id="date">{{ $post->created_at }} by <a href="{{ route('users.show', ['id' => $post->user_id]) }}">{{ $post->user->name }}</a></small>
      <p id="content">{{ $post->content }}</p>
      <hr>
      <div class="comments">
        <h4>Comments:</h4>
        <form action="{{ route('comments.store', ['id' => $post->id]) }}" method="POST">
          @csrf
          <div class="form-group">
            <textarea class="form-control" name="content" rows="5"></textarea>
          </div>
          <button class="btn btn-primary" type="submit">Add Comment</button>
        </form>
        @foreach($post->comments as $comment)
          <div class="comment">
            <hr>
            <p id="author"><a href="{{ route('users.show', ['id' => $comment->user->id]) }}">{{ $comment->user->name }}</a></p>
            <small>{{ $comment->created_at }}</small>
            <p id="content">{{ $comment->content }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection