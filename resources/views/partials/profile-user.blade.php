@vite('resources/css/user_styles/user-index_styles.css')
<main class="main__profile-index">

    <div class="box__user">

        <h1 class="username__text">{{ $current_user->name }}</h1class>

        <p class="userdata__text">Email: {{ $current_user->email }}</p>

        <form action="{{ route('user.logout', ['id' => $current_user->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>

    </div>

</main>