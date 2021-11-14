<div class="column is-4">
    <a href="{{ route('projects.show', $project) }}">
        <div class="card">
            <div class="card-content card-header-title is-centered">
                <div class="media">

                    <div class="media-content">
                        <p class="title is-5">
                            {{ app()->getLocale() == 'en' ? $project->name_en : $project->name_ar }}
                        </p>

                    </div>
                </div>

            </div>
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="{{ $project->image }}" alt="Placeholder image">
                </figure>
            </div>
        </div>
    </a>
</div>
