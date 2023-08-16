<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;


class HomeController extends Controller
{

    public function index() 
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('pages.home', compact('posts'));
    }

    public function clear() {
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('storage:link');
    
        return redirect()->route('home')->with('info', 'cleaned!');
    }
}
