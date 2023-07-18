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
        
    </div>
</x-app-layout>