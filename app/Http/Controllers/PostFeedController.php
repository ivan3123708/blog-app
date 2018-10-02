<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostFeedController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('home', ['posts' => $posts]);
    }

    public function filterCategory($category) {
        $posts = Post::where('category', $category)->orderBy('created_at', 'desc')->paginate(10);

        return view('home', ['posts' => $posts]);
    }
}
