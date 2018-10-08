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
                <div class="post">
                    <div class="box">
                        <p id="category">{{ $post->category }}</p>
                        <h3 id="title">{{ $post->title }}</h3>
                        <small id="date">{{ $post->created_at }} by {{ $post->user->name }}</small>
                        <p id="content">{{ $post->content }}</p>
                        <p id="comments">Comments: {{ count($post->comments) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
