@extends('layouts.app')

@section('content')
  <div class="create">
    <h3>Create Post</h3>
    <form action="{{ route('posts.store') }}" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" placeholder="Add Title...">
        </div>
        <div class="form-group col-md-6">
          <label for="category">Category</label>
          <select name="category" class="form-control">
            <option value="Business">Business</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Health">Health</option>
            <option value="History">History</option>
            <option value="Politics">Politics</option>
            <option value="Religion">Religion</option>
            <option value="Science">Science</option>
            <option value="Sport">Sport</option>
            <option value="Technology">Technology</option>
            <option value="Misc" selected>Misc</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea type="text" name="content" rows="5" class="form-control" placeholder="Write something..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
@endsection