@extends('layouts.app')

@section('title', '- Tags')

@section('content')
    <section class="section">
        <div class="container">
            <div class="column is-12 block">
                <h2 class="title is-2">All tags</h2>
            </div>
            <div class="columns" style="display: flex;justify-content: space-between;flex-wrap: wrap;padding: 1.5rem;">
                @foreach ($tags as $tag)
                    <div class="button column is-3 is-primary is-light is-outlined">
                            <a href="{{ route('tags.show', $tag) }}">
                                <h4>{{ $tag->name }}</h4>
                            </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
