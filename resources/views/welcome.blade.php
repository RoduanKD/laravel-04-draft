@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <img src="{{ $image }}" alt="Roduan Kareem Aldeen">
    <h3>Skills</h3>
    <ul>
        @foreach ($skills as $skill)
        <li>{{ $skill }}</li>
        @endforeach
    </ul>
    <hr>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus itaque earum iure blanditiis corporis, asperiores necessitatibus deleniti at possimus ullam obcaecati numquam animi similique placeat soluta quos veniam vitae beatae?
    <br>
    <h4>please contact me <a href="/contact">here</a></h4>
@endsection
