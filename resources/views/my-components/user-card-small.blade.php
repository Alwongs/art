
<li class="user-card-small">
    <a href="{{ route('users.show', $user) }}">
        <div class="user-card-small__image-block">

            <img src="{{ Storage::url($user->avatar ?: $user->getDefaultAvatar()) }}" alt="avatar">

        </div>
        <h3 class="user-card-small__name">{{ $user->first_name }} {{ $user->last_name }}</h3>
    </a>
</li>