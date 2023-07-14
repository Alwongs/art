<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class FriendController extends Controller
{

    public function index() {
        $currentUser = Auth::user();
        $friends = $currentUser->friends();
        $requests = $currentUser->friendRequests();



        return view('pages.friends', compact('friends', 'requests'));
    }

    public function requestFriendship($id) {
        $user = User::find($id);

        if (!$user) {
            return  redirect()->route('home')->with('info', 'Пользователь не найден!');
        }
        if ( Auth::user()->hasFriendRequestPending($user) || $user->hasFriendRequestPending(Auth::user())) {
            return redirect()->route('users.show', $user->id)->with('info', 'Пользователю отправлен запрос в друзья');
        }
        if ( Auth::user()->isFriendWith($user) ) {
            return redirect()->route('users.show', $user->id)->with('info', 'Пользователь уже в друзьях');
        }
        Auth::user()->addFriend($user);

        return redirect()->route('users.show', $user->id)->with('info', 'Пользователю отправлен запрос в друзья');
    }

    public function acceptFriendship($id) {
        $user = User::find($id);

        if (!$user) {
            return  redirect()->route('home')->with('info', 'Пользователь не найден!');
        }      
        if ( !Auth::user()->hasFriendRequestReceived($user) )  {
            return  redirect()->route('home');            
        } 
        Auth::user()->acceptFriendRequest($user);

        return redirect()->route('users.show', $user->id)->with('info', 'Запрос в друзья принят');
    }
}
