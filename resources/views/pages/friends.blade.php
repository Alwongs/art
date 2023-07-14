<x-app-layout>
    <x-slot name="header">
        Друзья
    </x-slot>
    <div class="friends-page">

        <div class="friends-page__left">
            <ul class="friends-page__friend-list">

                @if($friends->count())
                    @foreach($friends as $user)
                        @include('my-components.user-card')
                    @endforeach
                @else
                    <li class="user-card"> У вас нет друзей</li>
                @endif

            </ul>
        </div>


        <div class="friends-page__right">
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
        </div>
    </div>
</x-app-layout>