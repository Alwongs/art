<x-app-layout>
    <x-slot name="header">
        @if(Auth::user()->id === $user->id)
            Моя страница
        @else
            {{ $user->name }}
        @endif
    </x-slot>
    <div class="person-page">

        <div class="person-page__info">
            <div class="person-page__img-block">
                <img src="{{ Storage::url('default-photo.jpg') }}" alt="photo">
            </div>
            <div class="person-page__text-block">
                <h1>{{ $user->name }}</h1>

                @if ( Auth::user()->hasFriendRequestPending($user) )
                    <p>{{ $user->name }} еще не принял(а) ваш запрос в друзья.</p>
                @elseif ( Auth::user()->hasFriendRequestReceived($user) )
                    <p><span>{{ $user->name }}</span> хочет с Вами подружиться.</p>
                    <a href="{{ route('friends.accept', $user->id) }}" class="btn">Подтвердить дружбу</a>
                @elseif ( Auth::user()->isFriendWith($user) )
                    {{ $user->name }} у Вас в друзьях
                @elseif ($user->id !== Auth::user()->id)
                    <a href="{{ route('friends.request', $user->id) }}" class="btn">Добавить в друзья</a>                 
                @endif

                {{-- @if ($info)
                    {{ $info }}
                @endif --}}
            </div>
        </div>



        {{-- <div class="home-page__left">
            <ul class="home-page__post-list">

                @foreach($posts as $post)
                    @include('my-components.post-card')
                @endforeach

            </ul>
        </div>


        <div class="home-page__right">
            <div class="home-page__friends-block">
                <h2>Ваши друзья</h2>
                <ul class="home-page__friend-list">
                    <li>first friend</li>
                    <li>second friend</li>
                    <li>third friend</li>
                    <li>forth friend</li>
                </ul>
            </div>
        </div> --}}
    </div>
</x-app-layout>