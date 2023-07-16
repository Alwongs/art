<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{

    public function getMyFriends() 
    {
        return view('pages.friends');
    }

    public function requestFriendship($id) 
    {
        $auth = Auth::user();
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('home')->with('info', 'Пользователь не найден!');
        }
        if ( $auth->id === $user->id ) {
            return  redirect()->route('home'); 
        }
        if ( $auth->hasFriendRequestPending($user) || $user->hasFriendRequestPending($auth)) {
            return redirect()->route('users.show', $user->id)->with('info', 'Пользователю отправлен запрос в друзья');
        }
        if ( $auth->isFriendWith($user) ) {
            return redirect()->route('users.show', $user->id)->with('info', 'Пользователь уже в друзьях');
        }
        $auth->addFriend($user);

        return redirect()->route('users.show', $user->id)->with('info', 'Пользователю отправлен запрос в друзья');
    }

    public function acceptFriendship($id) 
    {
        $auth = Auth::user();
        $user = User::find($id);

        if (!$user) {
            return  redirect()->route('home')->with('info', 'Пользователь не найден!');
        }      
        if ( !$auth->hasFriendRequestReceived($user) )  {
            return  redirect()->route('home');            
        } 
        $auth->acceptFriendRequest($user);

        return redirect()->route('users.show', $user->id)->with('info', 'Запрос в друзья принят');
    }

    public function deleteFriendship($id) 
    {
        $auth = Auth::user();
        $user = User::find($id);

        if ( !$auth->isFriendWith($user) ) {
            return redirect()->back();
        }    
        
        $auth->deleteFriend($user);

        return redirect()->back()->with('info', $user->name . ' удален из друзей.');
    }
}
