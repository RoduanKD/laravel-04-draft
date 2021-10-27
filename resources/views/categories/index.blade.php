@extends('layouts.app')

@section('title', '- All Categories')

@section('content')
    <div class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-2">My Categories</h3>
                </div>
                <div class="level-right">
                 <a class="button is-light is-primary is-outlined" href="{{ route('categories.create') }}">Add new category</a>
                </div>
            </div>
            <aside class="menu">
                <ul class="menu-list">
            @foreach ($categories as $category)
            <li>
                <div>
                    <a href="{{ route('categories.show', $category) }}">
                        <h4>{{ $category->name }}</h4>
                    </a>
                </div>
            </li>
            @endforeach
                </ul>
            </aside>
        </div>
    </div>
@endsection
