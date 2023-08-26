
<li class="user-card">
    <div class="user-card__image-block">

        <img src="{{ Storage::url($user->avatar ?: $user->getDefaultAvatar()) }}" alt="avatar">

    </div>  
    
    <a href="{{ route('users.show', $user) }}">
        <h3 class="user-card__name">{{ $user->first_name }} {{ $user->last_name }}</h3>
    </a>
</li>