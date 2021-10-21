@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>{{ $post->title }}</h3>
    <h4>Category: {{ $post->category->name }}</h4>
    <h6><a href="{{ route('posts.edit', $post) }}">edit</a></h6>
    <h6>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </h6>
    <p>
        {{ $post->content }}
    </p>
    <hr>
    <ul>
        @foreach ($post->comments as $comment)
            <li>
                <a href="mailto:{{ $comment->email }}">{{ $comment->name }}</a>: {{ $comment->content }}
                <a href="{{ route('comments.edit', $comment->id) }}">edit</a>
                <form method="post" action="{{ route('comments.destroy', $comment) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </li>
        @endforeach
    </ul>
    <hr>
    <fieldset>
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
        <legend>{{ $comment->id ? 'edit comment' : 'add new comment' }}</legend>
        <form action="{{ route('posts.comments.store', $post) }}" method="POST">
            @csrf
            <label>Name: <input type="text" name="name"></label><br>
            <label>Email: <input type="email" name="email"></label><br>
            <label>Comment: <textarea name="content"></textarea></label><br>
            <input type="submit" value="comment!">
        </form>
    </fieldset>
@endsection
