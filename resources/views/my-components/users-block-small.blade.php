<div class="users-block-small">
    <h2 class="users-block-small__title">{{ $title }}</h2>
    <ul>
        @foreach ($users as $user)

            @include('my-components.user-card-small')

        @endforeach
    </ul>
</div>