<article class="media">
    <div class="media-content">
        <div class="content">
            <p>
                <strong>{{ $comment->name }}</strong>
                <small>{{ $comment->created_at }}</small>
                <br>
                <small>{{ $comment->email }}</small>
                <br>
                {{ $comment->content }}
            </p>
        </div>
    </div>
    <div class="media-right">
        <form method="post" action="{{ route('comments.destroy', $comment) }}">
            @csrf
            @method('delete')
            <button class="delete" type="submit"></button>
        </form>
    </div>
</article>
