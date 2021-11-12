@extends('layouts.public')

@section('title', '- Home Page')

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-3">{{ $category->name }}</h3>
                </div>
                <div class="level-right">
                    <a  class="button is-primary is-light is-outlined" href="{{ route('categories.edit', $category) }}">edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="button is-danger is-light is-outlined" type="submit" value="delete">
                        </form>
                </div>
            </div>
            <hr>
            @each('partials.post', $category->posts, 'post')
        </div>
    </section>
@endsection
