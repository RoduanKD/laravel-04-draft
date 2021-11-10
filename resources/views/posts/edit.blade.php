@extends('layouts.app')

@section('title', '- edit: ' . $post->title_en)

@section('content')
    <h2 class="title.is-2">{{ __('messages.edit', ['item' => __('Search')]) }}</h2>
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
    <form action="{{ route('posts.update', $post) }}}}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Title
            <input type="text" name="title" value="{{ $post->title_en }}">
        </label>
        <br>
        <label>
            Content
            <textarea name="content" cols="30" rows="10">{{ $post->content_en }}</textarea>
        </label>
    </form>
@endsection
