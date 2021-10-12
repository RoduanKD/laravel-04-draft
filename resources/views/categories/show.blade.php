@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>{{ $category->name }}</h3>
    <h6><a href="{{ route('categories.edit', $category) }}">edit</a></h6>
    <h6>
        <form action="{{ route('categories.destroy', $category) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </h6>
    <hr>
    @each('partials.post', $category->posts, 'post')
@endsection
