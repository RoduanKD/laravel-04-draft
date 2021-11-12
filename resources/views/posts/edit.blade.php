@extends('layouts.public')

@section('title', '- edit: ' . $post->title_en)

@section('content')
    <div class="container">
        <div class="section">
            <div class="columns is-multiline is-centered">
                <div class="column is-6">
                    <h3 class="title is-2">Create New post</h3>
                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="columns is-centered is-multiline">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">Title</label>
                                    <div class="control">
                                        <input class="input @error('title') is-danger @enderror" name="title" type="text"
                                            placeholder="Post Title" value="{{ $post->title }}">
                                    </div>
                                    @error('title')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">Content</label>
                                    <div class="control">
                                        <textarea class="textarea @error('content') is-danger @enderror"
                                            placeholder="This is an example for post content" name="content" cols="30"
                                            rows="10">{{ $post->content }}</textarea>
                                    </div>
                                    @error('content')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="column is-12"><input type="submit" class="button is-primary is-outlined is-fullwidth"
                                value="Edit Post"></div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
