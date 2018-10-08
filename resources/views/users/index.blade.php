@extends('layouts.app')

@section('content')
  <div class="users">
    @foreach($users as $user)
      <div class="user">
        <div class="box">
          <img id="avatar" src="{{ asset('/storage/avatars/' . $user->avatar) }}" />
          <div>
            <h3 id="name"><a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name }}</a></h3>
            <p>Posts: {{ count($user->posts) }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection