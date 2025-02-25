@vite('resources/css/user_styles/user-index_styles.css')
<main class="main__posts-index">

    @foreach($posts as $post)

        <div class="post-box">

            <h2 class="post-title">{{ $post->title }}</h2>
            <div class="post-separator-box">
            <p class="post-text">{{ $post->description }}</p>
            </div>

        </div>

    @endforeach

</main>