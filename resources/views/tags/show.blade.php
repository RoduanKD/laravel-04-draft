@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div>
                        <h2 class="title is-2">{{ $tag->name }}</h2>
                    </div>
                </div>
                <div class="level-right">
                    <form action="{{ route('tags.edit', $tag) }}" method="POST">
                        <a class="button is-primary is-light is-outlined" href="{{ route('tags.edit', $tag) }}">edit</a>
                        @csrf
                        @method('DELETE')
                        <input class="button is-danger is-light is-outlined" type="submit" value="delete">
                    </form>
                </div>
            </div>
            <hr>
             <div class="block">
                <div class="columns is-centered">
                    <div class="column is-12">@each('partials.post', $tag->posts, 'post')</div>
                </div>
             </div>
        </div>
    </section>
@endsection
