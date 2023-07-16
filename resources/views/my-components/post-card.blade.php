<li class="post-card">
    <header>
        <span>
            <a href="{{ route('users.show', $post->user->id) }}">
                {{ $post->user->name }}
            </a>
        </span>
    </header>

    <main>
        <h2>{{ $post->title }}</h2>
        <img src="{{ Storage::url($post->image) }}" alt="">
        <p class="description">
            {{ $post->description }}
        </p>
    </main>
    
    <footer>
        Likes: {{ $post->likes }}
    </footer>
</li>