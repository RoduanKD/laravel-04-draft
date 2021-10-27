@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <section class="section">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <h3 class="title is-2">My Categories</h3>
                </div>
                <div class="level-right">
                    <a class="button is-primary is-outlined is-light" href="{{ route('categories.create') }}">Add new Category</a>
                </div>
            </div>
            <div>
                <table class="table" >
                    @foreach ($categories as $category)
                            <tr>
                                <td>
                                    <a href="{{ route('categories.show', $category) }}">
                                        {{ $category->name }}
                                    </a>
                                </td>
                            </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection