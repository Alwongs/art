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
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('pages.home', compact('posts'));
    }

}
