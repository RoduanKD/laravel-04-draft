@extends('layouts.public')

@section('title', '- Create new Category')

@section('content')
    <section class="section">
        <div class="container">
            <div class="coulmns is-centered is-multiline">
                <div class="coulmn is -10">
                    <h2 class="title is-2">Create New category</h2>
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input class="input @error('name') is-danger @enderror" name="name" type="text"
                                    placeholder="categories Title" value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="column is-12"><input type="submit"
                            class="button is-primary is-outlined is-fullwidth" value="Add new Categories">
                    </div>
                    </form>
                    @endsection
                </div>
            </div>
        </div>
    </section>
