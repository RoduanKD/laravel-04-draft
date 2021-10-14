@extends('layouts.app')

@section('title', '- All Tag')

@section('content')
    <h3>My Tag</h3>
    <h6><a href="{{ route('tags.create') }}">Add new tag</a></h6>
    @foreach ($tags as $tag)
        <div>
            <a href="{{ route('tags.show', $tag) }}">
                <h4>{{ $tag->name }}</h4>
            </a>
        </div>
    @endforeach
@endsection
