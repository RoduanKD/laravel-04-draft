@extends('layouts.app')

@section('title', '- edit: ' . $category->name)

@section('content')
    <div class="section">
        <div class="container">


                    <form action="{{ route('categories.update', $category) }}}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="columns is-centered">
                            <div class="column is-6">
                                <div class="columns is-centered is-multiline">

                        <div class="column is-12">
                            <h2 class="title is-2">Create New Category</h2>
                        </div>

                        <div class="column is-12">
                             <div class="field">
                                 <label class="label">Name</label>
                                    <div class="control">
                                        <input type="text"class="input @error('name') is-danger @enderror" name="name" value="{{ $category->name }}">
                                    </div>

                                      @error('name')
                                         <p class="help is-danger">{{$message}}</p>
                                      @enderror
                             </div>
                        </div>


                            <div class="column is-12">

                                 <input class="button is-primary is-light is-outlined" type="submit" value="Post"/>
                            </div>
                        </div>
                    </div>
                 </div>
            </form>
        </div>
    </div>
@endsection
