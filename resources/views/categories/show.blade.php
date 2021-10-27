@extends('layouts.app')

@section('title', '-' . $category->name)

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div>
                        <h2 class="title is-2">{{ $category->name }}</h2>
                    </div>
                </div>
                <div class="level-right">
                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                        <a class="button is-primary is-light is-outlined" href="{{ route('categories.edit', $category) }}">edit</a>
                        @csrf
                        @method('DELETE')
                        <input class="button is-danger is-light is-outlined" type="submit" value="delete">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
