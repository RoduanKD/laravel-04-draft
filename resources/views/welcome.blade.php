@extends('layouts.public')

@section('title', '- Home Page')

@section('content')
    <section class="hero is-info is-halfheight ">
        <div class="hero-body position-relative">
            <img class="hero-image" src="{{ $settings->firstWhere('title', 'hero_image')->content }}" alt="">
            <div class="container">
                <div class="">
                    <p class="title">
                        {{ $settings->firstWhere('title', 'hero_title')->content }}
                    </p>
                    <p class="subtitle">
                        {{ $settings->firstWhere('title', 'hero_subtitle')->content }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container is-max-desktop">
        <div class="notification is-primary">
            <section class="section">
                <div class="container">
                    <h3 class="title">My Latest Projects</h3>
                    <div class="columns is-multiline">
                        @each('partials.project', $projects, 'project')
                        <div class="column is-12">
                            {{ $projects->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <hr>
    <section class="section">
        <div class="container">
            <h3 class="title">My Latest Posts</h3>
            <div class="columns is-multiline">
                @each('partials.post', $posts, 'post')
                <div class="column is-12">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
