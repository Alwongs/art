<aside class="aside">
    <nav class="navigation">
        @auth
            <a href="{{ route( 'users.show', Auth::user() ) }}">Моя страница</a>
            <a href="{{ route( 'posts.index' ) }}">Мои рисунки</a>
            <a href="{{ route( 'friends' ) }}">Мои друзья</a>
            <a href="{{ route( 'users.index' ) }}">Художники</a>
        @endauth
    </nav>
</aside>
