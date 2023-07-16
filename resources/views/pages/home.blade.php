<x-app-layout>
    <x-slot name="header">
        Лента
    </x-slot>
    <div class="home-page">

        <div class="home-page__left">
            @include('my-components.posts-block')
        </div>


        <div class="home-page__right">
            @auth
                @if( $user->friends()->count() )
                    @include('my-components.users-block-small', [
                        'title' => 'Ваши друзья', 
                        'users' => $user->friends()]
                    )                
                @endif
                
                @if($user->friendRequests()->count())
                    @include('my-components.users-block-small', [
                        'title' => 'Запросы в друзья', 
                        'users' => $user->friendRequests()]
                    )    
                @endif
            @endauth       
        </div>
    </div>
</x-app-layout>