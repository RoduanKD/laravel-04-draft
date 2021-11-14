@extends('layouts.app', ['activePage' => 'projects', 'titlePage' => __('New Project')])

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
                    <form method="post" action="{{ route('admin.projects.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Project information') }}</h4>
                                {{-- <p class="card-category">{{ __('User information') }}</p> --}}
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
                                            <textarea
                                                class="form-control{{ $errors->has('name_ar') ? ' is-invalid' : '' }}"
                                                name="name_ar" id="input-name_ar" placeholder="{{ __('Arabic name') }}"
                                                required>{{ old('name_ar') }}</textarea>
                                            @if ($errors->has('name_ar'))
                                                <span id="name_ar-error" class="error text-danger"
                                                    for="input-name_ar">{{ $errors->first('name_ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('English Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name_en') ? ' has-danger' : '' }}">
                                            <textarea
                                                class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}"
                                                name="name_en" id="input-name_en" placeholder="{{ __('English Name') }}"
                                                required>{{ old('name_en') }}</textarea>
                                            @if ($errors->has('name_en'))
                                                <span id="name_en-error" class="error text-danger"
                                                    for="input-name_en">{{ $errors->first('name_ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                                    <div class="col-sm-7">
                                        <div
                                            class="{{ $errors->has('image') ? ' has-danger' : '' }} form-file-upload form-file-simple">
                                            <input type="file" class="form-control" name="image">
                                            @if ($errors->has('image'))
                                                <span id="image-error" class="error text-danger"
                                                    for="input-image">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Arabic Descreption') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('descreption_ar') ? ' has-danger' : '' }}">
                                            <textarea
                                                class="form-control{{ $errors->has('descreption_ar') ? ' is-invalid' : '' }}"
                                                name="descreption_ar" id="input-descreption_ar"
                                                placeholder="{{ __('Arabic Descreption') }}"
                                                required>{{ old('descreption_ar') }}</textarea>
                                            @if ($errors->has('descreption_ar'))
                                                <span id="descreption_ar-error" class="error text-danger"
                                                    for="input-descreption_ar">{{ $errors->first('descreption_ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('English Descreption') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('descreption_en') ? ' has-danger' : '' }}">
                                            <textarea id="summernote" placeholder="{{ __('English Descreption') }}"
                                                name="descreption_en">{{ old('descreption_en') }}</textarea>

                                            @if ($errors->has('descreption_en'))
                                                <span id="descreption_en-error" class="error text-danger"
                                                    for="input-descreption_en">{{ $errors->first('descreption_en') }}</span>
                                            @endif
                                        </div>
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
