@extends('layouts.app')

@section('title', '- Create new Tag')

@section('content')
<section class="section" style="    height: 69vh;">
    <div class="container">
        <form action="{{ route('tags.store') }}" method="POST">
            @csrf
            <div class="columns is-centered">
                <div class="column is-6">
                    <div class="columns is-multiline is-vcentered">
                        <div class="column is-12">
                            <h2 class="title is-2">Create New Tag</h2>
                        </div>
                        <div class="column is-12">
                            <div class="field">
                                <label class="label">name</label>
                                <div class="control">
                                    <input class="input @error('name') is-danger @enderror" name="name" type="text"
                                        placeholder="Post name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="column is-12">
                            <input  type="submit"
                                    class="button is-primary is-outlined is-fullwidth"
                                    value="Add new tag">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
