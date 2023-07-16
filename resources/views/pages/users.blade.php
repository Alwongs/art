<x-app-layout>
    <x-slot name="header">
        Художники
    </x-slot>

    <div class="user-list-page">

        <div class="user-list-page__left">
            @include('my-components.users-block')
        </div>

        <div class="user-list-page__right">
        </div>
        
    </div>
</x-app-layout>