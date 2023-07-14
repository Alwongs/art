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
            <div class="friends-page__friends-block">
                <h2>Я запросил в друзья:</h2>

                {{-- @if(Auth::user()-hasFriendRequestPending($user)) --}}




                <ul class="friends-page__friend-list">
                    @if($requests->count())
                        @foreach($requests as $request)
                            <li>{{ $request->name }}</li>
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
                            <li>{{ $request->name }}</li>
                        @endforeach
                    @else
                        <li> У вас нет запросов</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>