@extends('layouts.app')

@section('title', '- Tags')

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-2">All Tags</h3>
                </div>
                <div class="level-right">
                    <a class="button is-primary is-outlined is-light" href="{{ route('tags.create') }}">Add new tag</a>
                </div>
            </div>
            <div class="buttons">
                @foreach ($tags as $tag)
                    <a class="button is-primary is-light is-outlined" href="{{ route('tags.show', $tag) }}">
                        {{ $tag->name }} ({{ $tag->posts()->count() }})
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
