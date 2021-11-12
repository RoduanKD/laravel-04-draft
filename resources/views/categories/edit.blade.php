@extends('layouts.public')

@section('title', '- edit: ' . $category->name)

@section('content')
    <section class="section">
        <div class="columes">
            <div class="coulme">
                <h2>Create New Category</h2>
                <form action="{{ route('categories.update', $category) }}}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="field">
                        <div class="block"><label class="label">Name</label></div>
                        <div class="block">
                            <div class="control">
                                <input class="input @error('name') is-danger @enderror" name="name" type="text"
                                    value="{{ old('name') }}">
                            </div>
                        </div>
                        @error('name')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                        <div class="block"><input type="submit"class="button is-primary is-outlined " value="Add new Post"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
