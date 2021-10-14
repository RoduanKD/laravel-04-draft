@extends('layouts.app')

@section('title', '- Home Page')
@section('content')
    <h3>{{ $tag->name }}</h3>
    <h6><a href="{{ route('tags.edit', $tag) }}">edit</a></h6>
    <h6>
        <form action="{{ route('tags.destroy', $tag) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </h6>
@endsection
