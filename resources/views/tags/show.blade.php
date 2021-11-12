@extends('layouts.public')

@section('title', "- {$tag->name}")

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h2 class="title is-2">{{ $tag->name }}</h2>
                </div>
                <div class="level-right">
                    <form action="{{ route('tags.destroy', $tag) }}" method="POST">
                        <a class="button is-primary is-outlined is-light" href="{{ route('tags.edit', $tag) }}">edit</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete" class="button is-danger is-outlined is-light">
                    </form>
                </div>
            </div>
            <hr>
            <div class="columns is-multiline">
                @each('partials.post', $tag->posts, 'post')
            </div>
        </div>
    </section>
@endsection
