@extends('layouts.app')

@section('title', '- All Categories')
@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-3">My Categories</h3>
                </div>
                <div class="level-right">
                    <a class="button is-primary is-outlined is-light" href="{{ route('categories.create') }}">Add new category</a>
                </div>
            </div>
            <div class="columns is-multiline">
                @each('partials.category', $categories, 'category')
            </div>
        </div>
    </section>
@endsection
