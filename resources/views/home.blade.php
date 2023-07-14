<x-app-layout>
    <x-slot name="header">
        Лента
    </x-slot>
    <div class="home-page">

        <div class="home-page__left">
            <ul class="home-page__post-list">

                @foreach($posts as $post)
                    @include('my-components.post-card')
                @endforeach

            </ul>
        </div>


        <div class="home-page__right">
            @auth
                @if($friends->count())
                    <div class="home-page__friends-block">
                        <h2>Ваши друзья</h2>
                        <ul class="home-page__friend-list">
                            @foreach ($friends as $friend)
                                <li><a href="{{ route('users.show', $friend->id) }}">{{ $friend->name }}</a></li>                        
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                @if($requests->count())
                    <div class="friends-page__friends-block">
                        <h2>Запросы в друзья:</h2>
                        <ul class="friends-page__friend-list">
                            @foreach($requests as $request)
                                <li>
                                    <a href="{{ route('users.show', $request->id) }}">{{ $request->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @endauth        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </div>
    </div>
</x-app-layout>