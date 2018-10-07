<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Get all users
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    /**
     * Show specific user
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', ['user' => $user]);
    }
}
