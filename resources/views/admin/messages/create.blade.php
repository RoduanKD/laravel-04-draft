@extends('layouts.app', ['activePage' => 'Messages', 'titlePage' => __('')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('admin.messages.store') }}"
                        class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Message') }}</h4>

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
                                    <label class="col-sm-2 col-form-label">
                                        {{ __('First Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control"
                                                name="fname" id="input-name" type="text"
                                                 required="true"
                                                aria-required="true" />
                                                @error('fname')
                                                <p class="help is-danger">{{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                            {{ __('Last Name') }}</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <input class="form-control"
                                                    name="lname" id="input-name" type="text"
                                                    required="true"
                                                    aria-required="true" />
                                                    @error('lname')
                                                    <p class="help is-danger">{{ $message }} </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control"
                                                name="email" id="input-email" type="email"
                                                placeholder="{{ __('Email') }}"
                                                 required />
                                                 @error('email')
                                                 <p class="help is-danger">{{ $message }} </p>
                                             @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Content') }}</label>
                                    <div class="col-sm-7">
                                            <div class="input-group">
                                                <textarea  name="content"class="form-control" aria-label="With textarea">
                                                </textarea>
                                                @error('content')
                                                <p class="help is-danger">{{ $message }} </p>
                                            @enderror
                                              </div>
                                              <div class="card-footer ml-auto mr-auto">
                                                 <button type="submit" class="btn btn-primary">{{ __('Replay') }}</button>
                                              </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
