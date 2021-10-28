<div class="column is-4">
    <a href="{{ route('categories.show', $category) }}">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
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
                        <p class="title is-4">{{$category->name}}</p>
                    </div>
                </div>
                <div class="content">
                    
                    <br>
                    <time datetime="2016-1-1">{{$category->created_at}}</time>
                </div>
            </div>
        </div>
    </a>
</div>
