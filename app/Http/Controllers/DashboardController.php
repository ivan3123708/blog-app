<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);

        return view('dashboard', ['posts' => $posts]);
    }
}
