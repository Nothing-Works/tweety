<?php

namespace App\Http\Controllers;

use App\User;

class FollowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);

        return back();
    }
}
