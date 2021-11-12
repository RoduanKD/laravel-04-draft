@extends('layouts.public')

@section('title', '- Contact Me')

@section('content')
        <div class="section">
            <div class="container">
                <form action="{{ route('messages.store') }}" method="POST">
                    @csrf
                    <div class="columns is-centered">
                        <div class="column is-6">
                            <div class="columns is-multiline is-centered">
                                <div class="column is-12">
                                    <h2 class="title">Contact Me</h2>
                                </div>
                                <div class="column is-12">
                                    <label class="label">First name</label>
                                    <input type="text" class="input @error('fname') is-danger @enderror name="fname">
                                    @error('fname')
                                    <p class="help is-danger">{{$message}} </p>
                                    @enderror
                                </div>
                                <div class="column is-12">
                                    <label class="label">Last name</label>
                                    <input type="text" class="input @error('lname') is-danger @enderror name="lname">
                                    @error('lname')
                                    <p class="help is-danger">{{$message}} </p>
                                    @enderror
                                </div>
                                <div class="column is-12">
                                    <label class="label">Email</label>
                                    <input type="email" class="input @error('email') is-danger @enderror name="email">
                                    @error('email')
                                    <p class="help is-danger">{{$message}} </p>
                                    @enderror
                                </div>
                                <div class="column is-12">
                                    <label class="label">Message</label>
                                    <textarea class="input @error('content') is-danger @enderror name="content" cols="30" rows="10"></textarea>
                                    @error('content')
                                    <p class="help is-danger">{{$message}} </p>
                                    @enderror
                                </div>
                                <div class="column is-12"><input class= "button is-light is-primary is-outlined" type="submit" value="Send"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection

