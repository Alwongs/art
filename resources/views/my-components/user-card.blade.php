
<li class="user-card">

    <img src="{{ Storage::url('default-photo.jpg') }}" alt="avatar">
    
    <a href="{{ route('users.show', $user) }}">
        <h2>{{ $user->name }}</h2>
    </a>

</li>