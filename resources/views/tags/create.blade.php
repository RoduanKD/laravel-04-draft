@extends('layouts.public')

@section('title', '- Create new Tag')

@section('content')
    <h2>Create New tag</h2>
    @if ($errors->any())
        <div class="callout callout-danger">
            <h5>
                <i class="icon fas fa-ban " style="margin-right: 10px;color: #dd1616;"></i>Form Error
            </h5>
            <ul class="list-unstyled" style="margin-left: 1.9rem;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <label>
            Name
            <input type="text" name="name">
        </label>
    </form>
@endsection
