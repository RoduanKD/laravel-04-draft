@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <div class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-3">{{ $category->name }}</h3>
                </div>

                   <div class="level-right">
                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            <a class="button is-primary is-outlined is-light" href="{{ route('categories.edit', $category) }}">edit</a>
                            @method('DELETE')
                            <input class="button is-danger is-outlined is-light" type="submit" value="delete">
                        </form>
                    </div>
            </div>
            <hr>
            @each('partials.post', $category->posts, 'post')
        </div>
    </div>
@endsection
