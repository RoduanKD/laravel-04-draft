@extends('layouts.app')

@section('title', '- Create new Post')

@section('content')
    <h2>Create New post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title
            <input type="text" name="title">
        </label>
        <br>
        <label>
            Content
            <textarea name="content" cols="30" rows="10"></textarea>
        </label>
    </form>
@endsection
