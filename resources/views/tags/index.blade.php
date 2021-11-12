@extends('layouts.public')

@section('title', '- Tags')

@section('content')
<<<<<<< HEAD
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
=======
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-2">All Tags</h3>
                </div>
                <div class="level-right">
                    <a class="button is-primary is-outlined is-light" href="{{ route('tags.create') }}">Add new tag</a>
                </div>
            </div>
            <div class="buttons">
                @foreach ($tags as $tag)
                    <a class="button is-primary is-light is-outlined" href="{{ route('tags.show', $tag) }}">
                        {{ $tag->name }} ({{ $tag->posts()->count() }})
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
>>>>>>> 383a0ec6ea77103a7213091968b556986c23a61a
