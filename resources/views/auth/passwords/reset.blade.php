@extends('layouts.app')

@section('guest-content')
<div class="container-fluid pt-5 pb-5">
    <div class="row pt-5 justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="card shadow resetPasswordCard">
                <div class="card-header cardHeader">
                    <div class="card-title">
                        <h5 class="cardHeaderText">{{ __('Reset Password') }}</h5>
                    </div>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('password.update') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row pb-3">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <label for="email" class="float-end cardLabelText"><b><i>{{ __('Email Address') }}:</i></b></label>
                            </div>

                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                <input id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

                                @error('email')
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
                                <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" autofocus>

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

                        <div class="row pb-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary float-end resetPasswordButton">{{ __('Reset Password') }}</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer cardFooter"></div>
            </div>
        </div>
    </div>
</div>
@endsection
