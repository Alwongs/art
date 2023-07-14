
<li class="home-page__post-item post-card">
    <header>
        <span>User: {{ $post->user_id }}</span>
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