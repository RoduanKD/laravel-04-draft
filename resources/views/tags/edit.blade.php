@extends('layouts.public')

@section('title', '- edit: ' . $tag->name)

@section('content')

    <section class="section">
        <div class="container">
            <div class="columns is-multiline is-vcentered">
                <div class="column is-12 ">
                    <h2 class="title is-2">Edit Tag</h2>
                </div>
            </div>


            <form action="{{ route('tags.update', $tag) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="columns is-centered">
                    <div class="column is-6">
                        <div class="columns is-multiline is-vcentered">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control">
                                        <input class="input @error('name') is-danger @enderror" name="name" type="text"
                                            placeholder="Tag Name" value="{{ $tag->name }}">
                                    </div>
                                    @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="column is-12"><input type="submit"
                                    class="button is-primary is-outlined is-fullwidth" value="Edit Tag">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </section>

@endsection
