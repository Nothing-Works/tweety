<?php

namespace App\Http\Controllers;

use App\User;

class ExploreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {
        return view('explore.index', ['users' => User::paginate(50)]);
    }
}
