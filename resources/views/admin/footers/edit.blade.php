@extends('layouts.app', ['activePage' => 'Footer Management', 'titlePage' => __('Footer Management')])

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('admin.footers.update', $footer) }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Footer') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('First Section name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('firstsection') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('firstsection') ? ' is-invalid' : '' }}"
                                                name="firstsection" id="input-title-ar" type="text"
                                                placeholder="{{ __('First Section') }}" value="{{ $footer->firstsection }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('firstsection'))
                                                <span id="firstsection-error" class="error text-danger"
                                                    for="input-firstsection">{{ $errors->first('firstsection') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('First Section Details') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('contact') ? ' has-danger' : '' }}">
                                            <div class="summernote">
                                                <textarea
                                                    class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}"
                                                    name="contact" id="input-title-ar" type="text"
                                                    placeholder="{{ __('Enter the First Section Details Here') }}"
                                                    required="true" aria-required="true" > {{ $footer->contact }} </textarea>
                                            </div>
                                            @if ($errors->has('contact'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('contact') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Second Section') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('secondsection') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('secondsection') ? ' is-invalid' : '' }}"
                                                name="secondsection" id="input-title-ar" type="text"
                                                placeholder="{{ __('Second Section') }}" value="{{ $footer->secondsection }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('secondsection'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('secondsection') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Second Section Details') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('links') ? ' has-danger' : '' }}">
                                            <div class="summernote">
                                                <textarea
                                                    class="form-control{{ $errors->has('links') ? ' is-invalid' : '' }}"
                                                    name="links" id="input-title-ar" type="text"
                                                    placeholder="{{ __('Enter the First Section Details Here') }}"
                                                    required="true" aria-required="true" > {{ $footer->links }} </textarea>
                                            </div>
                                            @if ($errors->has('links'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('links') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Third Section') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('thirdsection') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('thirdsection') ? ' is-invalid' : '' }}"
                                                name="thirdsection" id="input-title-ar" type="text"
                                                placeholder="{{ __('Third Section') }}" value="{{ $footer->thirdsection }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('thirdsection'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('thirdsection') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Third Section Details') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('important') ? ' has-danger' : '' }}">
                                            <div class="summernote">
                                                <textarea
                                                    class="form-control{{ $errors->has('important') ? ' is-invalid' : '' }}"
                                                    name="important" id="input-title-ar" type="text"
                                                    placeholder="{{ __('Enter the First Section Details Here') }}"
                                                    required="true" aria-required="true" > {{ $footer->important }} </textarea>
                                            </div>
                                            @if ($errors->has('important'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('important') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr>


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Forth Section') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('forthsection') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('forthsection') ? ' is-invalid' : '' }}"
                                                name="forthsection" id="input-title-ar" type="text"
                                              placeholder="{{ __('Forth Section') }}" value="{{ $footer->forthsection }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('forthsection'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('forthsection') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Forth Section Details') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('other') ? ' has-danger' : '' }}">
                                            <div class="summernote">
                                                <textarea
                                                    class="form-control{{ $errors->has('other') ? ' is-invalid' : '' }}"
                                                    name="other" id="input-title-ar" type="text"
                                                    placeholder="{{ __('Enter the First Section Details Here') }}"
                                                    required="true" aria-required="true" > {{ $footer->other }} </textarea>
                                            </div>
                                            @if ($errors->has('other'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('other') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Featured Image') }}</label>
                                    <div class="col-sm-7">
                                        <div
                                            class="{{ $errors->has('featured_image') ? ' has-danger' : '' }} form-file-upload form-file-simple">
                                            <input type="file" class="form-control" name="featured_image">
                                            @if ($errors->has('featured_image'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('featured_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div> --}}


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
