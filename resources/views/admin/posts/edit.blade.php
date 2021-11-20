@extends('layouts.app', ['activePage' => 'post-create', 'titlePage' => __('New Post')])

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });
            $('.select2').select2();
            $('#summernote').summernote();
        });
    </script>
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('admin.posts.update',$post) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')
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
                                            <input
                                                class="form-control{{ $errors->has('title_ar') ? ' is-invalid' : '' }}"
                                                name="title_ar"
                                                id="input-title-ar"
                                                type="text"
                                                placeholder="{{ __('Arabic Title') }}"
                                                value="{{ $post->title_ar }}"
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
                                                required="true" aria-required="true"
                                                value="{{ $post->title_en }}" />
                                            @if ($errors->has('title_en'))
                                                <span id="title-ar-error" class="error text-danger" for="input-title-ar">
                                                    {{ $errors->first('title_en') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                                            <select
                                                class="form-control form-control-select{{ $errors->has('category_id') ? ' is-invalid' : '' }}"
                                                name="category_id" id="input-title-ar" type="text"
                                                placeholder="{{ __('Category') }}" value="{{ old('category_id') }}"
                                                required="true" aria-required="true">
                                                {{-- @foreach ($categories as $id => $categroy)
                                                    <option value="{{ $id }}" @if (in_array($id, $selected_categories)) selected @endif>{{ $categroy }}</option>
                                                @endforeach --}}
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
                                            <select class="select2" multiple="multiple"
                                                data-placeholder="Select tags" style="width: 100%;" name="tags[]"
                                                id="input-title-ar" placeholder="{{ __('Tags') }}"
                                                value="{{ old('tags[]') }}" required="true" aria-required="true">
                                                @foreach ($tags as $id => $tag)
                                                    <option value="{{ $id }}" @if (in_array($id, $selected_tags)) selected @endif>{{ $tag }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('tags[]'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('tags[]') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if ($post->featured_image)
                                        <div>
                                            <a target="_blank" href="{{ $post->featured_image }}">
                                                <img src="{{ $post->featured_image }}" height="150px" width="150px" />
                                            </a>
                                        </div>
                                    @endif
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="featured_image" class="custom-file-input" id="exampleInputFile"
                                                placeholder="file input">
                                            <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
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
                                                required>{{ $post->content_ar }}</textarea>
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
                                                name="content_en">{{ $post->content_en }}</textarea>
                                            @if ($errors->has('content_en'))
                                                <span id="content_en-error" class="error text-danger"
                                                    for="input-content_en">{{ $errors->first('content_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
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
