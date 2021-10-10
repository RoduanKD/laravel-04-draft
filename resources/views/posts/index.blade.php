@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>My Posts</h3>
    <h6><a href="{{ route('posts.create') }}">Add new post</a></h6>
    @foreach ($posts as $post)
        <div>
            <a href="{{ route('posts.show', $post) }}">
                <h4>{{ $post->title }}</h4>
            </a>
            <p>{{ substr($post->content, 0, 10) }} ...</p>
        </div>
    @endforeach
@endsection
