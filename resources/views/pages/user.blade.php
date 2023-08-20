<x-app-layout>
    <x-slot name="header">
        @if (Auth::user()->id === $user->id)
            Моя страница
        @else
            {{ $user->name }}
        @endif
    </x-slot>

    <div class="user-page">
        <div class="user-page__about">
            <div class="user-page__image">
                @if ($user->avatar)
                    <img src="{{ Storage::url($user->avatar) }}" alt="photo">
                @else
                    <img src="{{ Storage::url($user->getDefaultAvatar()) }}" alt="photo">
                @endif
            </div>

            <div class="user-page-text">
                <header>
                    <h1>{{ $user->name }}</h1>
                </header>

                <main>
                    @if(Auth::user()->id === $user->id)
                        <form class="input-file-form" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="input-file-block">
                                @include('my-components.input-file', ['title' => $user->avatar ? 'Обновить фотографию' : 'Загрузить фотографию'])
                            </div>
                            <input id="saveAvatarBtn" type="submit" value="Сохранить" class="btn btn-green hidden">
                        </form>
                    @endif
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


        <div class="flex-page">
            <div class="flex-page__left">
                <div class="btn-block mb-20">
                    <a href="{{ route('posts.create') }}" class="btn-link-blue">
                        Добавить новую запись
                    </a>
                </div>                 
                @include('my-components.posts-block', ['posts' => $user->posts])  
            </div>

            <div class="flex-page__right">
       
                @if($user->friends()->count())
                    @include('my-components.users-block-small', [
                        'title' => Auth::user()->id === $user->id ? 'Ваши друзья:' : 'Друзья у ' . $user->first_name . ':', 
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