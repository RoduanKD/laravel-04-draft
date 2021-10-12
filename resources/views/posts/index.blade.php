@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>My Posts</h3>
    <h6><a href="{{ route('posts.create') }}">Add new post</a></h6>
    @each('partials.post', $posts, 'post')
@endsection
