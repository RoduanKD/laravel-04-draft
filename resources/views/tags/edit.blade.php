@extends('layouts.public')

@section('title', '- edit: ' . $tag->name)

@section('content')
    <h2>Create New Tag</h2>
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
    <form action="{{ route('tags.update', $tag) }}}}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Name
            <input type="text" name="name" value="{{ $tag->name }}">
        </label>
    </form>
@endsection
