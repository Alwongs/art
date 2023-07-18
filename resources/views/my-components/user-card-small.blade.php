
<li class="user-card-small">
    <a href="{{ route('users.show', $user) }}">

        <img src="{{ Storage::url('default-photo.jpg') }}" alt="avatar">
    
        <h3 class="user-card-small__name">{{ $user->name }}</h3>

    </a>
</li>