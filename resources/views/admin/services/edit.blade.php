@extends('layouts.app', ['activePage' => 'services', 'titlePage' => __('Edit a Service')])

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
                    <form method="post" action="{{ route('admin.services.update', $service) }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Alter Service information') }}</h4>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Arabic Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name_ar') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name_ar') ? ' is-invalid' : '' }}"
                                                name="name_ar" id="input-name-ar" type="text"
                                                placeholder="{{ __('Arabic Name') }}" value="{{ old('name_ar') }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('name_ar'))
                                                <span id="name-ar-error" class="error text-danger"
                                                    for="input-name-ar">{{ $errors->first('name_ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('English Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name_en') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}"
                                                name="name_en" id="input-name-ar" type="text"
                                                placeholder="{{ __('English Name') }}" value="{{ old('name_en') }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('name_en'))
                                                <span id="name-ar-error" class="error text-danger"
                                                    for="input-name-ar">{{ $errors->first('name_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
