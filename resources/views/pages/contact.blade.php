@extends('layouts.app')

@section('title', '- Contact Me')

@section('content')
    <fieldset>
        <legend><h2>Contact me</h2></legend>
        <form action="/message" method="POST">
            @csrf
            <input type="text" name="email"> <br>
            <textarea name="message" cols="30" rows="10"></textarea> <br>
            <input type="submit" value="Send">
        </form>
    </fieldset>
@endsection
