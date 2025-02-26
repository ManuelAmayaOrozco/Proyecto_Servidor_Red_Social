@vite('resources/css/user_styles/user-index_styles.css')
<main class="main__posts-index">

    <div class="post-box">

        <h2 class="post-title">{{ $post->title }}</h2>
        <h3 class="post-user">{{ $post_user }}</h3>
        <div class="post-separator-box">
        <p class="post-text">{{ $post->description }}</p>
        </div>

        <p class="likes-text">Likes: {{ $post->n_likes }}</p>

        <form action="{{ route('post.like', ['id' => $post->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-like">Like</button>
        </form>

        @if ($post->belongs_to == $current_user_id)
        <form action="{{ route('post.delete', ['id' => $post->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        @endif

    </div>


</main>