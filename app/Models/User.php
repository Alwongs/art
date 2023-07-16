<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // устанавливаем отношение многи ко многим, друзья
    public function friendsOfMine()
    {
        return $this->belongsToMany(User::class, 'friendship', 'user_id', 'friend_id');
    }

        // устанавливаем отношение многи ко многим, друг
    public function friendOf()
    {
        return $this->belongsToMany(User::class, 'friendship', 'friend_id', 'user_id');
    }

    public function friends()
    {
        return $this->friendsOfMine()->wherePivot('status', 1)->get()
            ->merge( $this->friendOf()->wherePivot('status', 1)->get() );
    }

    // запросы в друзья
    public function friendRequests()
    {
        return $this->friendsOfMine()->wherePivot('status', 0)->get();
    }

    // запрос на ожидание друга
    public function friendRequestsPending()
    {
        return $this->friendOf()->wherePivot('status', 0)->get();
    }

    // есть запрос на добавление в друзья
    public function hasFriendRequestPending(User $user) {
        return (bool) $this->friendRequestsPending()->where('id', $user->id)->count();
    }

    // получил запрос о дружбе
    public function hasFriendRequestReceived(User $user) {
        return (bool) $this->friendRequests()->where('id', $user->id)->count();        
    }

    // добавить друга
    public function addFriend(User $user) {
        $this->friendOf()->attach($user->id);
    }

    // удалить из друзей
    public function deleteFriend(User $user) {
        $this->friendOf()->detach($user->id);
        $this->friendsOfMine()->detach($user->id);
    }

    // принять запрос на дружбу
    public function acceptFriendRequest(User $user) {
        $this->friendRequests()->where('id', $user->id)->first()->pivot->update([
            'status' => 1
        ]);
    }

    // пользователь уже в друзьях
    public function isFriendWith(User $user) {
        return (bool) $this->friends()->where('id', $user->id)->count();  
    }  

}
