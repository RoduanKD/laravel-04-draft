@extends('layouts.app', ['activePage' => 'services', 'titlePage' => __('Show Service')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                                        Description English
                                    </th>

                                    <th>
                                        Description Arabic
                                    </th>

                                    <th>
                                        Features Image
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>
                                        {{ $service->name_en }}
                                    </td>
                                    <td>
                                        {{ $service->name_ar }}
                                    </td>

                                    <td>
                                        {{ $service->description_en }}
                                    </td>
                                    <td>
                                        {{ $service->description_ar }}
                                    </td>
                                    <td>
                                        <img src="{{ $service->featured_image }}">
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer ml-auto mr-auto">
                        <a rel="tooltip" class="btn btn-success btn-link"
                            href="{{ route('admin.services.index') }}">{{ __('Back') }}</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
