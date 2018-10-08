<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        Comment::create([
            'user_id' => auth()->user()->id,
            'post_id' => $id,
            'content' => $request->content
        ]);

        return redirect()->route('posts.show', ['id' => $id]);
    }
}
