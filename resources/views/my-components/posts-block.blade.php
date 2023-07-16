<ul class="posts-block">
    @foreach($posts as $post)
        @include('my-components.post-card')
    @endforeach
</ul>