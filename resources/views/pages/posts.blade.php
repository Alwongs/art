<x-app-layout>
    <x-slot name="header">
        Лента
    </x-slot>
    <div class="posts-page">

        <div class="posts-page__left">
            @include('my-components.posts-block')
        </div>
        
    </div>
</x-app-layout>