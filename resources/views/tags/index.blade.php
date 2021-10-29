@extends('layouts.app')

@section('title', '- Tags')

@section('content')
<section class="section">
<div class="container">

    <div class="level">
        <div class="level-left">
            <h3 class="title is-2">Tags</h3>
        </div>
        <div class="level-right">
            <a class="button is-primary is-outlined is-light" href="{{ route('tags.create') }}">Add New Tag</a>
        </div>
    </div>
    <div class="columns is-multiline">
        @each('partials.tag', $tags, 'tag')
    </div>
</div>
</section>
@endsection
