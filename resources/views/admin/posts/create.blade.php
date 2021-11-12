@extends('layouts.app', ['activePage' => 'posts', 'titlePage' => __('New Post')])

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
                    <form method="post" action="{{ route('admin.posts.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Post information') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Arabic Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title_ar') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('title_ar') ? ' is-invalid' : '' }}"
                                                name="title_ar" id="input-title-ar" type="text"
                                                placeholder="{{ __('Arabic Title') }}" value="{{ old('title_ar') }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('title_ar'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('title_ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('English Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title_en') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('title_en') ? ' is-invalid' : '' }}"
                                                name="title_en" id="input-title-ar" type="text"
                                                placeholder="{{ __('English Title') }}" value="{{ old('title_en') }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('title_en'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('title_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                                            <select
                                                class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}"
                                                name="category_id" id="input-title-ar" type="text"
                                                placeholder="{{ __('Category') }}" value="{{ old('category_id') }}"
                                                required="true" aria-required="true">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category_id'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('category_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Tags') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('tags[]') ? ' has-danger' : '' }}">
                                            <select class="form-control{{ $errors->has('tags[]') ? ' is-invalid' : '' }}"
                                                name="tags[]" id="input-title-ar" type="text"
                                                placeholder="{{ __('Tags') }}" value="{{ old('tags[]') }}"
                                                required="true" aria-required="true" multiple>
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('tags[]'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('tags[]') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Featured Image') }}</label>
                                    <div class="col-sm-7">
                                        <div
                                            class="{{ $errors->has('featured_image') ? ' has-danger' : '' }} form-file-upload form-file-simple">
                                            {{-- <input
                                                class="form-control{{ $errors->has('featured_image') ? ' is-invalid' : '' }} inputFileVisible"
                                                type="text" placeholder="{{ __('Featured Image') }}"
                                                value="{{ old('featured_image') }}" required="true"
                                                aria-required="true" /> --}}
                                            <input type="file" class="form-control" name="featured_image">
                                            @if ($errors->has('featured_image'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('featured_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Arabic Content') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('content_ar') ? ' has-danger' : '' }}">
                                            <textarea
                                                class="form-control{{ $errors->has('content_ar') ? ' is-invalid' : '' }}"
                                                name="content_ar" id="input-content_ar"
                                                placeholder="{{ __('Arabic Content') }}"
                                                required>{{ old('content_ar') }}</textarea>
                                            @if ($errors->has('content_ar'))
                                                <span id="content_ar-error" class="error text-danger"
                                                    for="input-content_ar">{{ $errors->first('content_ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('English Content') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('content_en') ? ' has-danger' : '' }}">
                                            <textarea id="summernote" placeholder="{{ __('English Content') }}"
                                                name="content_en">{{ old('content_en') }}</textarea>
                                            {{-- <textarea

                                                class="form-control{{ $errors->has('content_en') ? ' is-invalid' : '' }}"
                                                name="content_en" id="input-content_en"
                                                placeholder="{{ __('English Content') }}"
                                                required>{{ old('content_en') }}</textarea> --}}
                                            @if ($errors->has('content_en'))
                                                <span id="content_en-error" class="error text-danger"
                                                    for="input-content_en">{{ $errors->first('content_en') }}</span>
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
