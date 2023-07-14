<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index() {
        if (Auth::user()) {
            $currentUser = Auth::user();
            $friends = $currentUser->friends();
            $requests = $currentUser->friendRequests(); 
        } else {
            $friends = [];
            $requests = [];
        }


        $posts = Post::all();

        return view('home', compact('posts', 'friends', 'requests'));
    }

}
