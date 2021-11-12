@extends('layouts.public')

@section('title', '- All Categories')

@section('content')
    <h3>My Categories</h3>
    <h6><a href="{{ route('categories.create') }}">Add new category</a></h6>
    @foreach ($categories as $category)
        <div>
            <a href="{{ route('categories.show', $category) }}">
                <h4>{{ $category->name }}</h4>
            </a>
        </div>
    @endforeach
@endsection
