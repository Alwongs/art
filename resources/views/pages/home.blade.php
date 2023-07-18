<x-app-layout>
    <x-slot name="header">
        Лента
    </x-slot>

    <div class="flex-page">
        <div class="flex-page__left">
            <div class="btn-block mb-20">
                <a href="{{ route('posts.create') }}" class="btn btn-blue">
                    Добавить новую запись
                </a>
            </div>
            @include('my-components.posts-block')
        </div>


        <div class="flex-page__right">
            @auth
                @if( Auth::user()->friends()->count() )
                    @include('my-components.users-block-small', [
                        'title' => 'Ваши друзья', 
                        'users' => Auth::user()->friends()]
                    )                
                @endif
                @if(Auth::user()->friendRequests()->count())
                    @include('my-components.users-block-small', [
                        'title' => 'Запросы в друзья', 
                        'users' => Auth::user()->friendRequests()]
                    )    
                @endif
            @endauth       
        </div>
    </div>
</x-app-layout>