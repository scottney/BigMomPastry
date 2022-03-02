@extends('layouts.app')

@section('guest-content')
<div class="container-fluid pt-5 pb-5">
    <div class="row pt-5 justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="card shadow loginCard">
                <div class="card-header cardHeader">
                    <div class="card-title">
                        <h5 class="cardHeaderText">{{ __('Login') }}</h5>
                    </div>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf

                        <div class="row pb-3">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <label for="email" class="float-end cardLabelText"><b><i>{{ __('Email Address') }}:</i></b></label>
                            </div>

                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                <input id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

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
                                <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                <i class="fa-solid fa-eye-slash" id="togglePassword" title="Show Password" onclick="toggle_login()"></i>

                                @error('password')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pb-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link float-end" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                        </div>

                        <div class="row pb-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 offset-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 float-end">
                                <button type="reset" class="btn btn-danger float-start resetButton">{{ __('Reset') }}</button>
                                <button type="submit" class="btn btn-primary float-end loginButton">{{ __('Login') }}</button>
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
