@extends('layouts.app')

@section('content')
  <div class="postfeed">
    @if(count($posts))
      @foreach ($posts as $post)
        @post(['post' => $post])
        @endpost
      @endforeach
    @else
      <h3 id="no-posts">No Posts.</h3>
    @endif
  </div>
@endsection