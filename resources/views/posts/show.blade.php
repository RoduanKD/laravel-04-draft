@extends('layouts.public')

@section('title', '-' . $post->title_en)

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div>
                        <h2 class="title is-2">{{ $post->title_en }}</h2>
                        <h5 class="subtitle is-5">Category: {{ $post->category->name }}</h5>
                    </div>
                </div>
                <div class="level-right">
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @can('update-post', $post)<a class="button is-primary is-light is-outlined"
                            href="{{ route('posts.edit', $post) }}">edit</a>@endcan
                        @csrf
                        @method('DELETE')
                        <input class="button is-danger is-light is-outlined" type="submit" value="delete">
                    </form>
                </div>
            </div>
            <p class="block">
                {{ $post->content_en }}
            </p>
            <hr>
            <div class="block">
                <div class="columns is-centered">
                    <div class="column is-5">@each('partials.comment', $post->comments, 'comment')</div>
                </div>
            </div>
            <hr>
            <div class="columns is-centered">
                <div class="column is-5">
                    <form action="{{ route('posts.comments.store', $post) }}" method="POST">
                        @csrf
                        <div class="columns is-multiline">
                            <div class="column is-6">
                                <label>Name: <input type="text" name="name"></label>
                            </div>
                            <div class="column is-6">
                                <label>Email: <input type="email" name="email"></label>
                            </div>
                            <div class="column is-12">
                                <label>Comment: <textarea name="content"></textarea></label>
                            </div>
                            <div class="column is-12">
                                <input type="submit" value="comment!">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
