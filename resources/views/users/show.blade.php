@extends('layouts.app')

@section('content')
  <div class="user">
    <div class="box">
      <img id="avatar" src="{{ asset('/storage/avatars/' . $user->avatar) }}">
      <h3>{{ $user->name }}</h3>
      <div class="posts">
        <h4>Posts:</h4>
          @if (count($user->posts))
            @foreach($user->posts as $post)
              @post(['post' => $post])
              @endpost
            @endforeach
          @else
            <p><i>No Posts</i></p>
          @endif
      </div>
    </div>
  </div>
@endsection