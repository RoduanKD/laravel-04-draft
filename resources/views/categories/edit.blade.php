@extends('layouts.app')

@section('title', '- edit: ' . $category->name)

@section('content')
    <h2>Create New Category</h2>
    <form action="{{ route('categories.update', $category) }}}}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Name
            <input type="text" name="name" value="{{ $category->name }}">
        </label>
    </form>
@endsection
