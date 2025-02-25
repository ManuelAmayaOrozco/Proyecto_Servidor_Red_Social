@vite('resources/css/user_styles/user-index_styles.css')
<main class="main__posts">

    <ul>
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
    </ul>

</main>