@extends('layouts.app')

@section('standard-content')
<div class="container-fluid pt-5 pb-5">
    <div class="row pt-5 justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="card shadow confirmPasswordResetCard">
                <div class="card-header cardHeader">
                    <div class="card-title">
                        <h5 class="cardHeaderText">{{ __('Confirm Password') }}</h5>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row pt-3 pb-3">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            {{ __('Please confirm your password before continuing.') }}
                        </div>
                    </div>

                    <form action="{{ route('password.confirm') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf

                        <div class="row pb-3">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <label for="password" class="float-end cardLabelText"><b><i>{{ __('Password') }}:</i></b></label>
                            </div>

                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" autofocus>

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
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">{{ __('Confirm Password') }}</button>
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
