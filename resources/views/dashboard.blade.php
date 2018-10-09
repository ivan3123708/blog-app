@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <h3>Dashboard</h3>
        <div id="add-post">
            <i class="fas fa-plus"></i>
            <a href="{{ route('posts.create') }}">Create Post</a>
        </div>
        <div class="posts">
            @foreach ($posts as $post)
                @post(['post' => $post])
                @endpost
            @endforeach
        </div>
    </div>
@endsection
