@extends('layouts.app', ['activePage' => 'services', 'titlePage' => __('Show Service')])

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endpush

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
                                href ="{{route('admin.services.index')}}">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
