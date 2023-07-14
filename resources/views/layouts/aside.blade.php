<aside class="aside">
    <nav class="navigation">
        <a href="{{ route( 'users.index' ) }}">Художники</a>
        @auth
            <a href="{{ route( 'users.show', Auth::user() ) }}">Моя страница</a>
            <a href="{{ route( 'friends' ) }}">Мои друзья</a>
            <a href="{{ route( 'posts.index' ) }}">Мои рисунки</a>
        @endauth
    </nav>
</aside>
