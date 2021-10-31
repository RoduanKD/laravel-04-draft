@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-2">My Posts</h3>
                </div>
                <div class="level-right">
                    <a class="button is-primary is-outlined is-light" href="{{ route('posts.create') }}">Add new post</a>
                </div>
            </div>
            <div class="columns is-multiline">
                @each('partials.post', $posts, 'post')
                <div class="column is-12">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
