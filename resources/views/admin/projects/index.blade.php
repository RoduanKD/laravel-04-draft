@extends('layouts.app', ['activePage' => 'projects', 'titlePage' => __('Projects')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Projects') }}</h4>
                            <p class="card-category"> Here you can manage Projects</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-primary">Add
                                        Projects</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Name English
                                            </th>
                                            <th>
                                                Name Arabic
                                            </th>
                                            <th>
                                                Descreption Arabic
                                            </th>
                                            <th>
                                                Descreption English
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
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>

                                                    <a
                                                        href="{{ route('admin.projects.show', $project) }}">{{ $project->name_en }}</a>
                                                </td>
                                                <td>
                                                    {{ $project->name_ar }}
                                                </td>

                                                <td>
                                                    {{ $project->descreption_ar }}
                                                </td>
                                                <td>
                                                    {{ $project->descreption_en }}
                                                </td>
                                                <td>
                                                    {{ $project->created_at }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <form action="{{ route('admin.projects.destroy', $project) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a rel="tooltip" class="btn btn-success btn-link"
                                                            href="{{ route('admin.projects.edit', $project) }}"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">edit</i>
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
                                    {{ $projects->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
