<div class="column is-4">
    <a href="{{ route('posts.show', $post) }}">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="{{ $post->featured_image }}" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">{{ $post->title }}</p>
                        <p class="subtitle is-6">
                            @author
                            -
                            <a
                                href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}</a>
                        </p>
                    </div>
                </div>
                <div class="content">
                    {{ substr($post->content, 0, 30) }} ...
                    <br>
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('tags.show', $tag) }}">#{{ $tag->name }}</a>
                    @endforeach
                    <br>
                    <time datetime="2016-1-1">{{ $post->created_at }}</time>
                </div>
            </div>
        </div>
    </a>
</div>
