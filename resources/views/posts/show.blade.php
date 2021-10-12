@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>{{ $post->title }}</h3>
    <h4>Category: {{ $post->category->name }}</h4>
    <h6><a href="{{ route('posts.edit', $post) }}">edit</a></h6>
    <h6>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </h6>
    <p>
        {{ $post->content }}
    </p>
@endsection
