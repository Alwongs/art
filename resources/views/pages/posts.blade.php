<x-app-layout>
    <x-slot name="header">
        Лента
    </x-slot>
    <div class="home-page">

        <div class="home-page__left">
            <ul class="home-page__post-list">

                @foreach($posts as $post)
                    @include('my-components.post-card')
                @endforeach

            </ul>
        </div>


        {{-- <div class="home-page__right">
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