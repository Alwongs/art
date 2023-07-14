<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $dataArray = [];

        $usersCount = User::count();
        $dataArray['usersCount'] = $usersCount;

        // if (Auth::id()) {
        //     $postsCount = Post::count();
        //     $dataArray['postsCount'] = $postsCount;
        // } else {
        //     $dataArray['postsCount'] = Auth::id();            
        // }   

        View::share($dataArray);
    }
}
