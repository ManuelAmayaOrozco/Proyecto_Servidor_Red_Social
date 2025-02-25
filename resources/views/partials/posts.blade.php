@vite('resources/css/user_styles/user-index_styles.css')
<main class="main__posts-index">

    @foreach($posts as $post)

        <div class="post-box">

            <h2 class="post-title">{{ $post->title }}</h2>
            <div class="post-separator-box">
            <p class="post-text">{{ $post->description }}</p>
            </div>

            <p class="likes-text">Likes: {{ $post->n_likes }}</p>

            <form action="{{ route('post.like', ['id' => $post->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-like">Like</button>
            </form>

        </div>

    @endforeach

</main>