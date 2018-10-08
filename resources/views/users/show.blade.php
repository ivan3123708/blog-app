@extends('layouts.app')

@section('content')
  <div class="user">
    <div class="box">
      <img id="avatar" src="{{ asset('/storage/avatars/' . $user->avatar) }}">
      <h3>{{ $user->name }}</h3>
      <div class="posts">
        <h4>Posts:</h4>
          @if (count($user->posts))
            <ul>
              @foreach($user->posts as $post)
                <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></li>
              @endforeach
            </ul>
          @else
            <p><i>No Posts</i></p>
          @endif
      </div>
    </div>
  </div>
@endsection