@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-2">{{ __('messages.my-posts') }}</h3>
                </div>
                @auth
                    <div class="level-right">
                        <a class="button is-primary is-outlined is-light" href="{{ route('posts.create') }}">Add new post</a>
                    </div>
                @endauth
            </div>
            <div class="columns">
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
                        <div class="block">
                            <div class="subtitle is-5 mb-1">
                                categories
                            </div>
                            @foreach ($categories as $category)
                                <label class="checkbox">
                                    <input name="categories[]" type="checkbox" value="{{ $category->id }}"
                                        {{ in_array($category->id, request()->query('categories', [])) ? 'checked' : '' }}>
                                    {{ $category->name }}
                                </label>
                            @endforeach
                        </div>
                        <div class="block">
                            <div class="subtitle is-5 mb-1">
                                tags
                            </div>
                            @foreach ($tags as $tag)
                                <label class="checkbox">
                                    <input name="tags[]" type="checkbox" value="{{ $tag->id }}"
                                        {{ in_array($tag->id, request()->query('tags', [])) ? 'checked' : '' }}>
                                    {{ $tag->name }}
                                </label>
                            @endforeach
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
            </div>
        </div>
    </section>
@endsection
