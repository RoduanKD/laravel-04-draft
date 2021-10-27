@extends('layouts.app')

@section('title', '- Home Page')

@section('content')

    <div class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-2">{{ $tag->name }}</h3>
                </div>
                <div class="level-right">
                    <form action="{{ route('tags.destroy', $tag) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class= "button is-light is-primary is-outlined" href="{{ route('tags.edit', $tag) }}">edit</a>
                            <input class= "button is-light is-danger is-outlined " type="submit" value="delete">
                        </form>
                </div>
            </div>
            @each('partials.post', $tag->posts, 'post')
        </div>
    </div>
@endsection
