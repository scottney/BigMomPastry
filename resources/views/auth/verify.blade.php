@extends('layouts.app')

@section('standard-content')
<div class="container-fluid pt-5 pb-5">
    <div class="row pt-5 justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="card shadow emailVerificationCard">
                <div class="card-header cardHeader">
                    <div class="card-title">
                        <h5 class="cardHeaderText">{{ __('Verify Your Email Address') }}</h5>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <i class="fa-solid fa-circle-check"></i>
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <div class="row pt-3 pb-3">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                        </div>
                    </div>

                    <form action="{{ route('verification.resend') }}" method="POST" class="d-inline" role="form">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>

                <div class="card-footer cardFooter"></div>
            </div>
        </div>
    </div>
</div>
@endsection
