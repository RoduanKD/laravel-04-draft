@extends('layouts.app')

@section('title', '- Create new Post')

@section('content')
    <h2>Create New post</h2>
    @if ($errors->any())
        <div class="callout callout-danger">
            <h5>
                <i class="icon fas fa-ban " style="margin-right: 10px;color: #dd1616;"></i>Form Error
            </h5>
            <ul class="list-unstyled" style="margin-left: 1.9rem;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <div><small>{{ $message }}</small></div>
            @enderror
        </label>
        <br>
        <label>
            Category:
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div><small>{{ $message }}</small></div>
            @enderror
        </label>
        <br>
        <label>
            Tags:
            <select name="tags[]" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags[]') ?? []) ? 'selected' : '' }}>
                        {{ $tag->name }}</option>
                @endforeach
            </select>
            @error('tags')
                <div><small>{{ $message }}</small></div>
            @enderror
            @error('tags.*')
                <div><small>{{ $message }}</small></div>
            @enderror
        </label>
        <br>
        <label>
            Content
            <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea>
            @error('content')
                <div><small>{{ $message }}</small></div>
            @enderror
        </label>
        <br>
        <input type="submit" value="add">
    </form>
@endsection
