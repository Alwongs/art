<x-app-layout>
    <x-slot name="header">
        Новая запись
    </x-slot>
    <div class="flex-page">

        <div class="flex-page__left">

            <form action="{{ route('posts.store') }}" class="form" method="POST">
                <h1 class="form__title">Новая запись</h1>
                @csrf
                <div class="form__input input-block">
                    <input type="text" name="title" placeholder="title" @error('title') class="input-error" @enderror>
                    @error('title')
                        <p class="input-block__error">{{ $message }}</p>                    
                    @enderror
                </div>
                <div class="form__input input-block">
                    <textarea type="text" name="description" placeholder="description"></textarea>
                </div>
                <div class="form__btn-block">
                    <input type="submit" value="Сохранить" class="btn btn-green">
                </div>
            </form>
        </div>
        
    </div>
</x-app-layout>