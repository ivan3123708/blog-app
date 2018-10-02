<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostFeedController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('home', ['posts' => $posts]);
    }
}
