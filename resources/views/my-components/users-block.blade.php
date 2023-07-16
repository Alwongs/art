<ul class="users-block">

    @foreach($users as $user)
        @include('my-components.user-card')
    @endforeach

</ul>