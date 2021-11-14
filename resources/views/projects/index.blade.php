@extends('layouts.public')

@section('title', '- Project Page')

@section('content')
<section class="section">
    <div class="container">
        <div class="level">
            <div class="level-left">
                <h3 class="title is-2">{{ __('messages.my-projects') }}</h3>
            </div>
        </div>
        {{--<div class="columns">
            <div class="column is-2">
                <form action="{{ route('posts.index') }}">
                    <div class="field">
                        <label class="label">{{ __('Search') }}</label>
                        <div class="control is-expanded has-icons-left">
                            <input class="input" type="text" placeholder="Search ..." name="q"
                                value="{{ request()->query('q', '') }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="subtitle is-4">
                        Filters
                    </div>

                    <div class="field">
                        <button type="submit" class="button is-info is-light">search</button>
                    </div>
                </form>
            </div>
            <div class="column">
                <div class="columns is-multiline">
                    @each('partials.post', $posts, 'post')
                    <div class="column is-12">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="column">
            <div class="columns is-multiline">
                @each('partials.project', $projects, 'project')
                <div class="column is-12">
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
