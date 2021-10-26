@extends('layouts.app')

@section('title', '- Home Page')

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
            <h3 class="title">My Latest Posts</h3>
            <div class="columns is-multiline">@each('partials.post', $posts, 'post')</div>
        </div>
    </section>
@endsection
