<li class="post-card">
    <header>
        @include('my-components.user-card-small-extra', ['user' => $post->user])
        @if (Auth::user()->id === $post->user->id)
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn-light btn-light-red">Удалить</button>
            </form>
        @endif
    </header>

    <main>
        <img class="post-card__image" src="{{ Storage::url($post->image) }}" alt="">
        <h2 class="post-card__title">{{ $post->title }}</h2>
        <p class="post-card__description">
            {{ $post->description }}
        </p>
    </main>
    
    <footer>
        Likes: {{ $post->likes }}
    </footer>
</li>