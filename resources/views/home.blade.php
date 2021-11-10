@extends('layouts.app')

@section('content')
    @component('components.full-page-section')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content">
                <p>
                    Welcome to <b>{{ config('app.name') }}</b>
                </p>
                <p>
                    You are logged in
                </p>
            </div>
        @endcomponent
    @endcomponent
@endsection
