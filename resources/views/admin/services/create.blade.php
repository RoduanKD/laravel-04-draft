@extends('layouts.app', ['activePage' => 'services', 'titlePage' => __('New Service')])

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summer-01').summernote();
            $('#summer-02').summernote();
        });
    </script>
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('admin.services.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Service information') }}</h4>
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
                                            <input class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}"
                                                name="name_en" id="input-name-ar" type="text"
                                                placeholder="{{ __('English Name') }}" value="{{ old('name_en') }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('name_en'))
                                                <span id="name-ar-error" class="error text-danger"
                                                    for="input-name-en">{{ $errors->first('name_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Featured Image') }}</label>
                                    <div class="col-sm-7">
                                        <div
                                            class="{{ $errors->has('featured_image') ? ' has-danger' : '' }} form-file-upload form-file-simple">
                                            <input type="file" class="form-control" name="featured_image">
                                            @if ($errors->has('featured_image'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-featured_image">{{ $errors->first('featured_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Arabic description') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description_ar') ? ' has-danger' : '' }}">
                                            <textarea id="summer-01"
                                                class="form-control{{ $errors->has('description_ar') ? ' is-invalid' : '' }}"
                                                name="description_ar" id="input-description_ar"
                                                placeholder="{{ __('Arabic description') }}"
                                                required>{{ old('description_ar') }}</textarea>
                                            @if ($errors->has('description_ar'))
                                                <span id="description_ar-error" class="error text-danger"
                                                    for="input-description_ar">{{ $errors->first('description_ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('English description') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description_en') ? ' has-danger' : '' }}">
                                            <textarea id="summer-02"
                                                class="form-control{{ $errors->has('description_en') ? ' is-invalid' : '' }}"
                                                name="description_en" id="input-description_en"
                                                placeholder="{{ __('English description') }}"
                                                required>{{ old('description_en') }}</textarea>
                                            @if ($errors->has('description_en'))
                                                <span id="description_en-error" class="error text-danger"
                                                    for="input-description_en">{{ $errors->first('description_en') }}</span>
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
