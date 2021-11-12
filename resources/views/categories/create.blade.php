@extends('layouts.public')

@section('title', '- Create new Category')

@section('content')
    <h2>Create New category</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label>
            Name
            <input type="text" name="name">
        </label>
    </form>
@endsection
