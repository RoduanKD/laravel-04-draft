@extends('layouts.app', ['activePage' => 'projects', 'titlePage' => __('Project Information')])


@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">
                                {{ app()->getLocale() == 'en' ? $project->name_en : $project->name_ar }}</h4>
                            <p class="card-category"> Information about the project</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Name En
                                            </th>
                                            <th>
                                                Name Ar
                                            </th>

                                            <th>
                                                Descreption Ar
                                            </th>
                                            <th>
                                                Descreption En
                                            </th>
                                            <th>
                                                Creation date
                                            </th>
                                            <th>
                                                update date
                                            </th>
                                            <th>
                                                delete date
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <tr>
                                                <td>
                                                    {{ $project->name_en }}
                                                </td>
                                                <td>
                                                    {{ $project->name_ar }}
                                                </td>
                                                <td>
                                                    {!! $project->descreption_ar !!}
                                                </td>
                                                <td>
                                                    {!! $project->descreption_en !!}
                                                </td>

                                                <td>
                                                    {{ $project->created_at }}
                                                </td>
                                                <td>
                                                    {{ $project->updated_at }}
                                                </td>
                                                <td>
                                                    {{ $project->deleted_at }}
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

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
