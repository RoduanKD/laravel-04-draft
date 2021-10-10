@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>{{ $post->title }}</h3>
    <h6><a href="/posts/{{ $post->id }}/edit">edit</a></h6>
    <h6>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </h6>
    <p>
        {{ $post->content }}
    </p>
@endsection
