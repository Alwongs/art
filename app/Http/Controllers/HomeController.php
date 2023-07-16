<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index() 
    {
        $user = Auth::user() ? Auth::user() : null;
        $posts = Post::all();

        return view('pages.home', compact('posts', 'user'));
    }

}
