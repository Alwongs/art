<div class="user-card-small-extra">
    <a href="{{ route('users.show', $user) }}">
        <div class="user-card-small-extra__image-block">

            <img src="{{ Storage::url($user->avatar ?: $user->getDefaultAvatar()) }}" alt="avatar">

        </div>
        <h3 class="user-card-small-extra__name">{{ $user->name }}</h3>
    </a>
</div>