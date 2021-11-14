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
                                <h4 class="card-title">{{ __('Hero Settings') }}</h4>
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
                                        <div class="form-group{{ $errors->has('hero_title') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('hero_title') ? ' is-invalid' : '' }}"
                                                name="hero_title" id="input-title-ar" type="text"
                                                placeholder="{{ __('Title') }}"
                                                value="{{ old('hero_title', $settings->firstWhere('title', 'hero_title')->content) }}" />
                                            @if ($errors->has('hero_title'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('hero_title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('New Hero Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('hero_subtitle') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('hero_subtitle') ? ' is-invalid' : '' }}"
                                                name="hero_subtitle" id="input-title-ar" type="text"
                                                placeholder="{{ __('Title') }}"
                                                value="{{ old('hero_subtitle', $settings->firstWhere('title', 'hero_subtitle')->content) }}" />
                                            @if ($errors->has('hero_subtitle'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('hero_subtitle') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- upload images --}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Change Hero image') }}</label>
                                    <div class="col-sm-7">
                                        <div class="{{ $errors->has('hero_image') ? ' has-danger' : '' }}">
                                            <input class="{{ $errors->has('hero_image') ? ' is-invalid' : '' }}"
                                                name="hero_image" type="file" />
                                            @if ($errors->has('hero_image'))
                                                <span id="image-error" class="error text-danger"
                                                    for="input-image">{{ $errors->first('hero_image') }}</span>
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
