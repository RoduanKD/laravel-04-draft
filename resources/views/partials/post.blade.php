<div>
    <a href="{{ route('posts.show', $post) }}">
        <h4>{{ $post->title }}</h4>
    </a>
    <p>{{ substr($post->content, 0, 10) }} ...</p>
    <h6>{{ $post->created_at }}</h6>
</div>
