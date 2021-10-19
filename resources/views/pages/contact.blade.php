@extends('layouts.app')

@section('title', '- Contact Me')

@section('content')
    <fieldset>
        <legend>
            <h2>Contact me</h2>
        </legend>
        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <label>First name<input type="text" name="fname"></label><br>
            @error('fname')
                <div><small>{{ $message }}</small></div>
            @enderror
            <label>Last name<input type="text" name="lname"></label><br>
            @error('lname')
                <div><small>{{ $message }}</small></div>
            @enderror
            <label>Email<input type="email" name="email"></label><br>
            @error('email')
                <div><small>{{ $message }}</small></div>
            @enderror
            <label>Message<textarea name="content" cols="30" rows="10"></textarea></label> <br>
            @error('content')
                <div><small>{{ $message }}</small></div>
            @enderror
            <input type="submit" value="Send">
        </form>
    </fieldset>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
