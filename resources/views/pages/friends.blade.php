<x-app-layout>
    <x-slot name="header">
        Друзья
    </x-slot>
    <div class="flex-page">
        <div class="flex-page__left">

            @if(Auth::user()->friends()->count())
                @include('my-components.users-block', [
                    'users' => Auth::user()->friends()
                ])
            @else
                <p class="user-card"> У вас нет друзей</p>
            @endif
        </div>


        <div class="flex-page__right">
        
            @if(Auth::user()->friendRequests()->count())
                @include('my-components.users-block-small', [
                    'title' => 'Запросы в друзья', 
                    'users' => Auth::user()->friendRequests()
                ])    
            @endif
        </div>
    </div>
</x-app-layout>