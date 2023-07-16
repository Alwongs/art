<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/person', [PersonController::class, 'index'])->name('person');
 



Route::middleware('auth')->group(function () {

    Route::resources([
        'posts' => PostController::class, 
        'users' => UserController::class, 
    ]);



    Route::get('/friends', [FriendController::class, 'getMyFriends'])->name('friends'); 
    Route::get('/friends/request/{user_id}', [FriendController::class, 'requestFriendship'])->name('friends.request');
    Route::get('/friends/accept/{user_id}', [FriendController::class, 'acceptFriendship'])->name('friends.accept');
    Route::post('/friends/delete/{user_id}', [FriendController::class, 'deleteFriendship'])->name('friends.delete');




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
