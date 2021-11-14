@extends('layouts.public')

@section('title', '- Home Page')

@section('content')
    <section class="hero is-info is-halfheight ">
        <div class="hero-body position-relative">
            <img class="hero-image" src="{{ asset($setting->getFirstMediaUrl('setting')) }}" alt="">
            <div class="container">
                <div class="">
                    <p class="title">
                        {{ $setting->title }}
                    </p>
                    <p class="subtitle">
                        {{ $setting->content }}
                    </p>
                </div>
            </div>
        </div>
    </section>
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
