@extends('layouts.app')

@section('title', '- Tags')

@section('content')
<div class="section">
    <div class="container">
            <div class="level">
                <div class="level-left">
                 <h3 class="title is-2">Tags</h3>
                </div>
                <div class="level-right"><a class= "button is-light is-primary is-outlined" href="{{ route('tags.create') }}">Add new tag</a></div>
            </div>
                <aside class="menu">
                    <ul class="menu-list">
                    @foreach ($tags as $tag)
                    <li>
                        <a href="{{ route('tags.show', $tag) }}">
                             <h4>{{ $tag->name }}</h4>
                        </a>
                    </li>
                    @endforeach
                    </ul>
                </aside>
            </div>
        </div>
@endsection
