@extends('layouts.public')

@section('title', '- Project Page')

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-2">{{ __('messages.my-projects') }}</h3>
                </div>
            </div>
            <div class="columns is-multiline">
                @each('partials.project', $projects, 'project')
                <div class="column is-12">
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
