@extends('layouts.app')

@section('guest-content')
<div class="container-fluid pt-5 pb-5">
    <div class="row pt-5 justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="card shadow registrationCard">
                <div class="card-header cardHeader">
                    <div class="card-title">
                        <h5 class="cardHeaderText">{{ __('Register') }}</h5>
                    </div>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf

                        <div class="row pb-3">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <label for="name" class="float-end cardLabelText"><b><i>{{ __('Username') }}:</i></b></label>
                            </div>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                <input id="inputName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" minlength="2" maxlength="19" autofocus>

                                @error('name')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pb-3">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <label for="email" class="float-end cardLabelText"><b><i>{{ __('Email Address') }}:</i></b></label>
                            </div>

                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                <input id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" minlength="5" maxlength="50" autofocus>

                                @error('email')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <input id="inputSystemRole" type="hidden" class="form-control @error('system_role') is-invalid @enderror" name="system_role" value="standard-user" autocomplete="system_role" minlength="5" maxlength="19" autofocus>

                                @error('system_role')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <input id="inputRole" type="hidden" class="form-control @error('role') is-invalid @enderror" name="role" value="1" autocomplete="role" min="1" max="1" autofocus>

                                @error('role')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pb-3">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <label for="password" class="float-end cardLabelText"><b><i>{{ __('Password') }}:</i></b></label>
                            </div>

                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" title="Requires an uppercase letter, a special character, a number and needs to be 8 or more characters in length" minlength="8" maxlength="19" autofocus>
                                <i class="fa-solid fa-eye-slash" id="togglePassword" title="Show Password" onclick="toggle_register()"></i>

                                @error('password')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pb-3">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <label for="password-confirm" class="float-end cardLabelText"><b><i>{{ __('Confirm Password') }}:</i></b></label>
                            </div>

                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                <input id="inputPasswordConfirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" autofocus>
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <button type="reset" class="btn btn-danger float-start resetButton">{{__('Reset')}}</button>
                                <button type="submit" class="btn btn-primary float-end registerButton">{{ __('Register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>
@endsection
