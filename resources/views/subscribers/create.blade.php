@extends('layouts.public')

@section('title', '- subscriptions')

@section('content')
    <section class="section" style="    height: 69vh;">
        <div class="container">
            <form action="{{ route('subscribers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="columns is-centered">
                    <div class="column is-6">
                        <div class="columns is-multiline is-vcentered">
                            <div class="column is-12">
                                <h2 class="title is-2">Subscribe!</h2>
                            </div>
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control">
                                        <input class="input @error('name') is-danger @enderror" name="name" type="text"
                                            placeholder="name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">email</label>
                                    <div class="control">
                                        <input class="input @error('email') is-danger @enderror" name="email" type="email"
                                            placeholder="your email" value="{{ old('email') }}">
                                    </div>
                                    @error('email')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">password</label>
                                    <div class="control">
                                        <input class="input @error('password') is-danger @enderror" name="password"
                                            type="password">
                                    </div>
                                    @error('password')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="column is-12">
                                <input type="submit" class="button is-primary is-outlined is-fullwidth" value="Subscribe!">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
