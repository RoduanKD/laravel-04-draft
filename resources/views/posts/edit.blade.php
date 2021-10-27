@extends('layouts.app')

@section('title', '- edit: ' . $post->title)

@section('content')
<section class="section">
    <div class="container">
        <div class="level">
            <div class="level-left">
                <h3 class="title is-2">Create New Post</h3>
            </div>
        </div>
            <div class="columns is-centered">
                <div class="column is-5">
                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="columns is-multiline is-vcentered">
                            <div class="coulmn is-12">
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
                            </div>
                                <br>
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
                            </form>
                        </div>
                   </div>
                </div>
            </div>
</section>
@endsection
