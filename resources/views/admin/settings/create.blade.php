@extends('layouts.app', ['activePage' => 'settings', 'titlePage' => __('Settings Page')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('admin.settings.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Settings Page') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('New Hero Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input  class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                                    name="title"
                                                    id="input-title-ar" type="text"
                                                    placeholder="{{ __('Title') }}"
                                                    value="{{ old('title') }}"
                                                    required="true"
                                                    aria-required="true" />
                                            @if ($errors->has('title'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('New Hero Content') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                            <textarea
                                                class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}"
                                                name="content" id="input-content"
                                                placeholder="{{ __('Content') }}"
                                                required>{{ old('content') }}</textarea>
                                            @if ($errors->has('content'))
                                                <span id="content-error" class="error text-danger"
                                                    for="input-content">{{ $errors->first('content') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- upload images --}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Change Hero image') }}</label>
                                    <div class="col-sm-7">
                                        <div class="{{ $errors->has('image') ? ' has-danger' : '' }}">
                                            <input class="{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image"
                                                type="file" required />
                                            @if ($errors->has('image'))
                                                <span id="image-error" class="error text-danger"
                                                    for="input-image">{{ $errors->first('image') }}</span>
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
