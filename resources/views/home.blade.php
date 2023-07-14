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
            <div class="home-page__friends-block">
                <h2>Ваши друзья</h2>
                <ul class="home-page__friend-list">
                    @foreach ($friends as $friend)
                        <li><a href="{{ route('users.show', $friend->id) }}">{{ $friend->name }}</a></li>                        
                    @endforeach
                </ul>
            </div>
            @endauth











            @auth
                <div class="friends-page__friends-block">
                    <h2>Я запросил в друзья:</h2>
                    <ul class="friends-page__friend-list">
                        @if($requests->count())
                            @foreach($requests as $request)
                                <li>
                                    {{ $request->name }}
                                </li>
                            @endforeach
                        @else
                            <li> У вас нет запросов</li>
                        @endif
                    </ul>
                </div>
                

                <div class="friends-page__friends-block">
                    <h2>Меня запросили в друзья:</h2>
                    <ul class="friends-page__friend-list">
                        @if($requests->count())
                            @foreach($requests as $request)
                                <li>
                                    {{ $request->name }}
                                </li>
                            @endforeach
                        @else
                            <li> У вас нет запросов</li>
                        @endif
                    </ul>
                </div>
            @endauth        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </div>
    </div>
</x-app-layout>