@extends('layouts.app')

@section('title', '- Contact Me')

    @section('content')
    <section class="section">
        <div class="container">
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <div class="columns is-centered">
                    <div class="column is-6">
                        <div class="columns is-multiline is-vcentered">
                            <div class="column is-12">
                                <h2 class="title is-2">Contact us</h2>
                            </div>
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">First Name</label>
                                    <div class="control">
                                        <input class="input @error('fname') is-danger @enderror" name="fname" type="text">
                                    </div>
                                    @error('fname')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">Lirst Name</label>
                                    <div class="control">
                                        <input class="input @error('lname') is-danger @enderror" name="lname" type="text">
                                    </div>
                                    @error('lname')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">E-mail</label>
                                    <div class="control">
                                        <input class="input @error('email') is-danger @enderror" name="email" type="email">
                                    </div>
                                    @error('email')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">Content</label>
                                    <div class="control">
                                        <textarea class="textarea @error('content') is-danger @enderror" name="content" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                    @error('content')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                    <input type="submit"class="button is-primary is-outlined " value="Add new Post"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

