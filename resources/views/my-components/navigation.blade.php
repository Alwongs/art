<nav class="navigation">

    <x-icon-link-home :route="route('home')">
        Главная
    </x-icon-link-home>

    @auth

        <x-icon-link-account :route="route( 'users.show', Auth::user() )">
            Моя страница
        </x-icon-link-account>

        <x-icon-link-pictures :route="route( 'posts.index' )">
            Мои рисунки
        </x-icon-link-pictures>

        <x-icon-link-friends :route="route( 'friends' )">
            Мои друзья
        </x-icon-link-friends>

        <x-icon-link-people :route="route( 'users.index' )">
            Художники
        </x-icon-link-people>

    @endauth
    
</nav>

