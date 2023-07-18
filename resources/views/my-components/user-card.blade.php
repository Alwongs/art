
<li class="user-card">

    <img src="{{ Storage::url('default-photo.jpg') }}" alt="avatar">
    
    <a href="{{ route('users.show', $user) }}">
        <h3 class="user-card__name">{{ $user->name }}</h3>
    </a>

</li>