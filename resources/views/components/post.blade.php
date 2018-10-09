<div class="post">
  <div class="box">
    <p id="category">{{ $post->category }}</p>
    <h3 id="title"><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
    <small id="date">{{ $post->created_at }} by <a href="{{ route('users.show', ['id' => $post->user_id]) }}">{{ $post->user->name }}</a></small>
    <p id="content">{{ strlen($post->content) > 200 ? substr($post->content, 0, 200) . '...' : $post->content }}</p>
    <p id="comments">Comments: {{ count($post->comments) }}</p>
  </div>
</div>