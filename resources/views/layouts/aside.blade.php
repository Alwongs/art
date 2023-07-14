<aside class="aside">
    <nav class="navigation">
        @auth
            <a href="{{ route( 'users.show', Auth::user() ) }}">Моя страница</a>
            <a href="{{ route( 'friends' ) }}">Мои друзья</a>
            <a href="{{ route( 'posts.index' ) }}">Мои рисунки</a>
        @endauth
        <a href="{{ route( 'users.index' ) }}">Художники</a>
    </nav>
</aside>
