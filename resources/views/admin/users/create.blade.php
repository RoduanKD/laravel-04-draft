@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('New Admin')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('admin.users.store') }}" autocomplete="off"
                        class="form-horizontal">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add New Admin') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Username') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            {{-- <input  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    name="name"
                                                    id="input-title-ar"
                                                    type="text"
                                                    placeholder="{{ __('Username') }}"
                                                    value="{{ old('name') }}"
                                                    required="true" aria-required="true" /> --}}
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Enter Username"
                                                value="{{ old('name') ? old('name') : $user->name }}">
                                            @if ($errors->has('name'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('E-mail') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            {{-- <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="email" id="input-title-ar" type="email"
                                                placeholder="{{ __('E-mail') }}" value="{{ old('email') }}"
                                                required="true" aria-required="true" /> --}}
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Enter E-mail"
                                                value="{{ old('email') ? old('email') : $user->email }}">
                                            @if ($errors->has('email'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Password') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            {{-- <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="password" id="input-title-ar" type="password"
                                                placeholder="{{ __('Password') }}" value="{{ old('email') }}"
                                                required="true" aria-required="true" /> --}}
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Enter Password"
                                                value="{{ old('password') ? old('password') : $user->password }}">
                                            @if ($errors->has('email'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group{{ $errors->has('confirm_password') ? ' has-danger' : '' }}">
                                            {{-- <input
                                                class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
                                                name="confirm_password" id="input-title-ar" type="password"
                                                placeholder="{{ __('Confirm Password') }}"
                                                value="{{ old('confirm_password') }}" required="true"
                                                aria-required="true" /> --}}
                                                <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"
                                                placeholder="Enter confirm_password" value="{{ old('confirm_password') ? old('confirm_password') : $user->confirm_password }}">
                                            @if ($errors->has('confirm_password'))
                                                <span id="title-ar-error" class="error text-danger"
                                                    for="input-title-ar">{{ $errors->first('confirm_password') }}</span>
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
