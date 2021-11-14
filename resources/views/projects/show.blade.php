@extends('layouts.public')

@section('title', '-' . "{{ app()->getLocale() == 'en' ? $project->name_en : $project->name_ar }}")

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-5">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="{{ $project->images }}" alt="Placeholder image">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="column is-1"></div>
                <div class="column is-5">
                    <div class="card">

                        <header class="card-header">
                            <p class="card-header-title is-centered">
                                About Project
                            </p>
                        </header>
                        <div class="card-content">
                            <div class="content">

                                <p class="title is-5">
                                    {{ app()->getLocale() == 'en' ? $project->name_en : $project->name_ar }}
                                </p>
                                <p class="title is-5">
                                    {!! app()->getLocale() == 'en' ? $project->descreption_en : $project->descreption_ar !!}
                                </p>
                            </div>
                        </div>

                        <footer class="card-footer">
                            <p class="card-footer-item">
                                {{ $project->created_at }}
                            </p>
                        </footer>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
