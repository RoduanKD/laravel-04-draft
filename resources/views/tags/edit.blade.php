@extends('layouts.app')

@section('title', '- edit: ' . $tag->name)

@section('content')
    <h2>Create New Tag</h2>
    <form action="{{ route('tags.update', $tag) }}}}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Name
            <input type="text" name="name" value="{{ $tag->name }}">
        </label>
    </form>
@endsection
