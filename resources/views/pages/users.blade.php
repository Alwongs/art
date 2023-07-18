<x-app-layout>
    <x-slot name="header">
        Художники
    </x-slot>

    <div class="flex-page">

        <div class="flex-page__left">
            @include('my-components.users-block')
        </div>

        <div class="flex-page__right">
        </div>
        
    </div>
</x-app-layout>