@extends('layouts.public')

@section('title', '- Create new Category')

@section('content')
    <section class="section">
        <div class="columes">
            <div class="colume">
                <h2 class="title is-2">Create New category</h2>
                <form action="{{ route('categories.store') }}" method="POST">
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
