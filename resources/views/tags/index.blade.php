@extends('layouts.app')

@section('title', '- Tags')

@section('content')
<section class="hero is-info is-halfheight">
    <div class="hero-body">
        <div class="container">
            <div class="">
                <p class="title">
                    Half height hero
                </p>
                <p class="subtitle">
                    Half height subtitle
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section">
        <div class="container">
            <div >
                <div >
                    <h3  class="title  is-2">Tags</h3><br>
                </div>
            </div>
            <div class="level-right">
            <h6 class="subtitle is 6"><a class ="button is-primary is-outlined is-light" href="{{ route('tags.create') }}">Add new tag</a></h6>
            </div>
            @foreach ($tags as $tag)
                <div class="columns is multiline">
                    <a href="{{ route('tags.show', $tag) }}">
                        <h4 class="title is-4">{{ $tag->name }}</h4>
                    </a>
                </div>
        </div>
        @endforeach
    @endsection
</section>
