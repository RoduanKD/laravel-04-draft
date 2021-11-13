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
                            <img src="{{ $post->user->getFirstMediaUrl() }}" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">
                            {{ app()->getLocale() == 'en' ? $post->title_en : $post->title_ar }}</p>
                        <p class="subtitle is-6">
                            {{ $post->user->name }}
                            -
                            <a href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}</a>
                        </p>
                    </div>
                </div>
                <div class="content">
                    {!! $post->content !!} ...
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
