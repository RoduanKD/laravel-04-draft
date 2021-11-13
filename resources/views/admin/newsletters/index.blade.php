@extends('layouts.app', ['activePage' => 'newsletters', 'titlePage' => __('newsletters')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Newsletters') }}</h4>
                            <p class="card-category"> Here you can manage newsletters</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('admin.newsletters.create') }}" class="btn btn-sm btn-primary">Add
                                        newsletter</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                English Title
                                            </th>
                                            <th>
                                                Arabic Title
                                            </th>

                                            <th>
                                                Creation date
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($newsletters as $newsletter)
                                            <tr>
                                                <td>
                                                    <a
                                                        href="{{ route('admin.newsletters.show', $newsletter) }}">{{ $newsletter->title_en }}</a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ route('admin.newsletters.show', $newsletter) }}">{{ $newsletter->title_en }}</a>
                                                </td>
                                                <td>
                                                    {{ $newsletter->created_at }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <form action="{{ route('admin.newsletters.destroy', $newsletter) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a rel="tooltip" class="btn btn-success btn-link"
                                                            href="{{ route('admin.newsletters.edit', $newsletter) }}"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">share</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                        <button type="submit" rel="tooltip" class="btn btn-danger btn-link"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">delete</i>
                                                            <div class="ripple-container"></div>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-3 text-center m-auto">
                                    {{ $newsletters->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
