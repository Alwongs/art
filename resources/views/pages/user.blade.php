<x-app-layout>
    <x-slot name="header">
        @if (Auth::user()->id === $user->id)
            Моя страница
        @else
            {{ $user->name }}
        @endif
    </x-slot>

    <div class="user-page">
        <div class="user-page-info">
            <div class="user-page-info__img-block">
                <img src="{{ Storage::url('default-photo.jpg') }}" alt="photo">
            </div>

            <div class="user-page-info__text-block">
                <header>
                    <h1>{{ $user->name }}</h1>
                </header>

                <main>
                </main>

                <footer>
                    @if ( Auth::user()->hasFriendRequestPending($user) )
                        <span> 
                            Отправлен запрос в друзья.
                        </span>
                    @elseif ( Auth::user()->hasFriendRequestReceived($user) )
                        <a href="{{ route('friends.accept', $user->id) }}" class="btn btn-green">
                            Принять заявку в друзья
                        </a>
                    @elseif ( Auth::user()->isFriendWith($user) )

                        <form action="{{ route('friends.delete', $user->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-red">
                                Удалить из друзей
                            </button>
                        </form>
 
                    @elseif ($user->id !== Auth::user()->id)
                        <a href="{{ route('friends.request', $user->id) }}" class="btn btn-green">
                            Добавить в друзья
                        </a> 
                    @endif
                </footer>
            </div>
        </div>


        <div class="user-page-content">
            <div class="user-page-content__left">
                @include('my-components.posts-block', ['posts' => $user->posts])  
            </div>

            <div class="user-page-content__right">
                @if($user->friends()->count())
                    @include('my-components.users-block-small', [
                        'title' => Auth::user()->id === $user->id ? 'Ваши друзья:' : 'Друзья у ' . $user->name . ':', 
                        'users' => $user->friends()
                    ]) 
                @endif

                @if($user->friendRequests()->count() && Auth::user()->id === $user->id)
                    @include('my-components.users-block-small', [
                        'title' => 'Запросы в друзья', 
                        'users' => $user->friendRequests()
                    ])    
                @endif                
            </div>
        </div>
    </div>
</x-app-layout>