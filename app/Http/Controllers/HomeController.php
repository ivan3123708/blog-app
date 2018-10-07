<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class HomeController extends Controller
{
    /**
     * Get posts filtered by category
     */
    public function category($category)
    {
        $posts = Post::where('category', $category)->orderBy('created_at', 'desc')->paginate(10);

        return view('home', ['posts' => $posts]);
    }
}
