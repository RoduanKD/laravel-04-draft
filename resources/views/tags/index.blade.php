@extends('layouts.app')

@section('title', '- All Tags')

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-2">My Tags</h3>
                </div>
                <div class="level-right">
                    <a class="button is-primary is-outlined is-light" href="{{ route('tags.create') }}">Add new tag</a>
                </div>
            </div>
            <div class="columns is-multiline">
                @foreach($tags as $tag)
                <div>
                    <a href="{{ route('tags.show', $tag) }}">
                        <h4>{{ $tag->name }}</h4>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
