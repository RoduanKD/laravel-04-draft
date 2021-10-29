<div class="column is-4">
    <a href="{{ route('tags.show', $tag) }}">
        <div class="card">
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">{{ $tag->name }}</p>
                        <p class="title is-6">{{ $tag->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
