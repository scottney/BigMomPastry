<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BigMomPastry') }}</title>

    <!-- Icon that shows in the browser tab when website is launched -->
    <link rel="shortcut icon" href=" {{ ('images/BigMomPastryLogo.jpg') }} ">

    <meta name="referrer" content="no-referrer">
    <meta name="description" content="Your one stop shop for anything and everything pastry and confectionery. Cakes, cookies, bread, burns etc...">
    <meta name="keywords" content="BigMomPastry, Bakery, Pastry, Confectionery, Cakes, Cookies, Bread, Buns, Birthday Cakes, Wedding Cakes, Anniversary Cakes etc...">
    <meta property="og:description" content="BigMomPastry, Bakery, Pastry, Confectionery, Cakes, Cookies, Bread, Buns, Birthday Cakes, Wedding Cakes, Anniversary Cakes etc..." xmlns:og="http://opengraphprotocol.org/schema/">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/extra.js') }}" defer></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Script handler for JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Popper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js" integrity="sha512-aDciVjp+txtxTJWsp8aRwttA0vR2sJMk/73ZT7ExuEHv7I5E6iyyobpFOlEFkq59mWW8ToYGuVZFnwhwIUisKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Bootstrap Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for projects counter -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for waypoints -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Sweetalert notifications -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Swiper -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js" integrity="sha512-pY1t/ADgTwbfGbw0+mRGd33EroA5YgRUWhQNFpPIAdBzyoSb38FsFrf4wBTcS3GFPdTfgtpRrbGCkdl2C2OXYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <!-- Script sources for ripple.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.js" integrity="sha512-wrQIZRuIVRafoAsp5i2HIXa+3oF+lQqx4eOMAdw+vt7npivM7+D4OMIZPhlkdbV18VxZLkn2QaOii6cr8c1+dA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js" integrity="sha512-zuZ5wVszlsRbRF/vwXD0QS/tHzBYHFzCD/BT0lI3yrWhNZFWDkkF3KPEY//WTanqxwPdZkskQ+xZo0rnfHBc5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Script source for Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap-grid.min.css" integrity="sha512-q0LpKnEKG/pAf1qi1SAyX0lCNnrlJDjAvsyaygu07x8OF4CEOpQhBnYiFW6YDUnOOcyAEiEYlV4S9vEc6akTEw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Script source for Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.css" integrity="sha512-PYSQaQBKTu066xiq+XES4zNfKps3Za9xFsPH97MuEaP53a4kNFed/Q7lW539jALMETHApKj7/CZ1ac9d0NBzZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Italianno font family -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm" id="main-nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <img src="{{url('/images/BigMomPastryLogo.jpg')}}" class="mainNavbarLogo" id="" alt="bigmompastrylogo">
                        <a class="navbar-brand text-white styled-text bottom-style" href="{{ url('/') }}">{{ config('app.name', 'BigMomPastry') }}</a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="container-fluid pt-2">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link text-white styled-text bottom-style" href="{{route('index')}}#products-area">{{ __('Products') }}</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-white styled-text bottom-style" href="{{route('index')}}#blog-area">{{ __('Blog') }}</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-white styled-text bottom-style" href="{{route('index')}}#operations-area">{{ __('Operations') }}</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white styled-text bottom-style" href="#" role="button" id="aboutUsDropDownMenu" data-bs-toggle="dropdown" aria-expanded="false">{{ __('About Us') }}</a>

                                        <ul class="dropdown-menu bg-dark" aria-labelledby="aboutUsDropDownMenu">
                                            <li><a class="dropdown-item text-white styled-text bottom-style" id="aboutUsDropDownItems" href="{{route('index')}}#about-us-area">AboutUs Section</a></li>
                                            <li><a class="dropdown-item text-white styled-text bottom-style" id="aboutUsDropDownItems" href="{{route('ourValues')}}">Our Values</a></li>
                                            <li><a class="dropdown-item text-white styled-text bottom-style" id="aboutUsDropDownItems" href="{{route('index')}}">Learn More</a></li>
                                            <li><a class="dropdown-item text-white styled-text bottom-style" id="aboutUsDropDownItems" href="{{route('MasterclassIndex')}}">Book A Master Class</a></li>
                                            <li><a class="dropdown-item text-white styled-text bottom-style" id="aboutUsDropDownItems" href="#">Find A BigMomPastry Outlet</a></li>
                                            <li><a class="dropdown-item text-white styled-text bottom-style" id="aboutUsDropDownItems" href="#">Sustainability At BigMomPastry</a></li>
                                            <li><a class="dropdown-item text-white styled-text bottom-style" id="aboutUsDropDownItems" href="#">BigMomPastryKenya</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-white styled-text bottom-style" href="{{route('index')}}#contacts-area">{{ __('Contacts') }}</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                    <i class="fa-solid fa-circle-user fa-2x text-white p-2"></i>
                                    <li class="nav-item dropdown">
                                        <p class="dropdown-toggle pt-2 styled-text text-white accountStatusText" id="accountStatusDropDownMenu" data-bs-toggle="dropdown" aria-expanded="false">{{ __('My Account') }}</p>

                                        <ul class="dropdown-menu bg-dark" aria-labelledby="accountStatusDropDownMenu">
                                            @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-item text-white styled-text background-style" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @endif

                                            @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-item text-white styled-text background-style" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                            @endif
                                        </ul>
                                    </li>
                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" 
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                            <form action="{{ route('logout') }}" method="POST" class="d-none" id="logout-form" accept-charset="UTF-8" enctype="multipart/form-data">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @if (Auth::check() && Auth::user()->system_role === 'standard-user')
            <main class="container-fluid pt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 banner">
                        @yield('standard-content')
                    </div>
                </div>
            </main>
        @else
            <main class="container-fluid pt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 banner">
                        @yield('guest-content')
                    </div>
                </div>
            </main>
        @endif
    </div>

    <!-- Start Of Main Footer Section -->
    <footer class="bg-dark text-muted">
        <div class="container-fluid text-center justify-content-center main-footer">
            <div class="row footerUniqueBorderBottom">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 pt-4 pb-1">
                    <p class="text-white footerUniqueText"><i class="fa-solid fa-arrow-pointer fa-1x text-white"></i>Click to Order Right Now !!!</p>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 pt-4 pb-1">
                    <p class="text-white footerUniqueText"><i class="fa-solid fa-solid fa-clock fa-1x text-white"></i><i>12 Noon cut off time for next day orders</i></p>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 pt-4 pb-1">
                    <p class="text-white footerUniqueText"><i class="fa-solid fa-truck fa-1x text-white"></i>Delivery across <b>Nairobi</b></p>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <h5 class="display-6 text-white pt-3 styled-text textFooterUnderline">BIGMOMPASTRY</h5>

                    <p class="text-white textFooter">As a pastry and confectionery bakery, distributor and outlet, we pride ourselves in delivering high quality, fresh and healthy baked products.</p>

                    <p class="text-white textFooter">We want to bring an entirely new and different experience when it comes to baked goods. Other than that, we want our customers to enjoy world class pastry and confectionery.</p>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <h5 class="display-6 text-white pt-3 styled-text textFooterUnderline">CONTACTS</h5>

                    <i class="fa-solid fa-building fa-1x p-2" id="contactsIcons"><a href="" class="textFooter" id="contactsIconsLinks"><i>4489-00232, Ruiru, Acacia-Street</i></a></i><br>
                    <i class="fa-solid fa-at fa-1x p-2" id="contactsIcons"><a href="mailto:bigmompastries@gmail.com" class="textFooter" id="contactsIconsLinks" target="_blank">BigMomPastry</a></i><br>
                    <i class="fa-solid fa-square-phone fa-1x p-2" id="contactsIcons"><a href="tel:+254708621963" class="textFooter" id="contactsIconsLinks" target="_blank">Phone Number</a></i><br>
                    <i class="fa-brands fa-whatsapp fa-1x p-2" id="contactsIcons"><a href="https://api.whatsapp.com/send?phone=254708621963" class="textFooter" id="contactsIconsLinks" target="_blank">Whatsapp</a></i><br>
                    <i class="fa-brands fa-telegram fa-1x p-2" id="contactsIcons"><a href="https://telegram.me/BigMomPastry" class="textFooter" id="contactsIconsLinks" target="_blank">Telegram</a></i>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="footerCircle topReveal">
                        <div class="footerLogo">
                            <div class="footerText">
                                <h5 class="text-white">BIGMOMPASTRY</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <h5 class="display-6 text-white pt-3 styled-text textFooterUnderline">SOCIAL MEDIA LINKS</h5>

                    <a href="https://www.facebook.com/BigMomPastry" class="contacts-text" id="" target="_blank"><i class="fa-brands fa-facebook fa-1x p-3" id="contactsIcons"></i></a>
                    <a href="https://www.instagram.com/big_mom_pastry" class="contacts-text" id="" target="_blank"><i class="fa-brands fa-instagram fa-1x p-3" id="contactsIcons"></i></a>
                    <a href="https://www.twitter.com/MomPastries" class="contacts-text" id="" target="_blank"><i class="fa-brands fa-twitter fa-1x p-3" id="contactsIcons"></i></a>
                    <a href="https://www.youtube.com/channel/UCizF1zni3MJdD7P1IoewAqg" class="contacts-text" id="" target="_blank"><i class="fa-brands fa-youtube fa-1x p-3" id="contactsIcons"></i></a>

                    <h5 class="display-6 text-white pt-3 styled-text textFooterUnderline">ACCEPTED PAYMENTS</h5>

                    <img src="{{url('/images/payments/mpesa.jpg')}}" class="paymentIcon" id="" alt="mpesa">
                    <!--
                    <img src="{{url('/images/payments/mpesa.jpg')}}" class="float-start paymentIcon" id="" alt="mpesa">
                    <img src="{{url('/images/payments/coopbank.jpg')}}" class="paymentIcon" id="" alt="coopbank">
                    <img src="{{url('/images/payments/paypal.jpg')}}" class="float-end paymentIcon" id="" alt="paypal">
                    -->
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="modal fade" id="newsletterModalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticNewsletterModalFormLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <img src="{{url('/images/newsletter.jpg')}}" class="newsletterImage" alt="newsletter">
                                    <h5 class="modal-title display-6 text-white pt-3 styled-text textFooterUnderline" id="staticNewsletterModalFormLabel">NEWSLETTER</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-white textFooter">Subscribe to our monthly newsletter and get the best in <b><i>pastry</i></b> and <b><i>confectionery</i></b> from <b><i>BigMomPastry</i></b></p>

                                    @if (!Auth::check())
                                        <form action="{{route('guestNewsletter')}}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row pt-3 pb-3">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <input type="email" name="subscription_email" class="form-control @error('subscription_email') is-invalid @enderror" id="inputSubscriptionEmail" value="{{old('subscription_email')}}" minlength="3" maxlength="50" placeholder="Email" autocomplete="subscription_email" autofocus>

                                                    @error('subscription_email')
                                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    @if(Session::has('newsletter-subscription-successfull'))
                                                        <div class="alert alert-success alert-dismissible fade show">
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                            <i class="fa-solid fa-circle-check"></i>
                                                            {{Session::get('newsletter-subscription-successfull')}}
                                                        </div>
                                                    @elseif(Session::has('newsletter-subscription-failed'))
                                                        <div class="alert alert-danger alert-dismissible fade show">
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                            <i class="fa-solid fa-circle-xmark"></i>
                                                            {{Session::get('newsletter-subscription-failed')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row pt-3 pb-3">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-success subscribeButton">subscribe</button>
                                                </div>
                                            </div>
                                        </form>
                                    @elseif (Auth::check() && Auth::user()->system_role === 'standard-user')
                                        <form action="{{route('standardUserNewsletter')}}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row pt-3 pb-3">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <input type="hidden" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ auth()->check() && auth()->user()->id }}">

                                                    @error('user_id')
                                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row pt-3 pb-3">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <input type="email" name="subscription_email" class="form-control @error('subscription_email') is-invalid @enderror" id="inputSubscriptionEmail" value="{{old('subscription_email')}}" minlength="3" maxlength="50" placeholder="Email" autocomplete="subscription_email" autofocus>

                                                    @error('subscription_email')
                                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    @if(Session::has('newsletter-subscription-successfull'))
                                                        <div class="alert alert-success alert-dismissible fade show">
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                            <i class="fa-solid fa-circle-check"></i>
                                                            {{Session::get('newsletter-subscription-successfull')}}
                                                        </div>
                                                    @elseif(Session::has('newsletter-subscription-failed'))
                                                        <div class="alert alert-danger alert-dismissible fade show">
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                            <i class="fa-solid fa-circle-xmark"></i>
                                                            {{Session::get('newsletter-subscription-failed')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row pt-3 pb-3">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-success subscribeButton">subscribe</button>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <small class="text-light">Developed and Maintained by <a href="" class="" id="">ArgoneTech</a></small><br>
                    <small class="text-light">All Rights Reserved.</small>
                    <small class="d-block text-light">© 2022</small>
                </div>
            </div>

        </div>
    </footer>
    <!-- End Of Main Footer Section -->

<!-- Script handler for swiper -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>

    window.addEventListener('load', keyBinder);
    window.addEventListener('load', rippleEffect);
    window.addEventListener('load', numbersCounter);
    window.addEventListener('load', cardsSwiper);
    window.addEventListener('load', circularText);
    window.addEventListener('load', circularTextFooter);
    window.addEventListener('load', newsletterModalForm);
    window.addEventListener('scroll', reveal);
    window.addEventListener('scroll', topReveal);
    window.addEventListener('scroll', leftReveal);
    window.addEventListener('scroll', rightReveal);
    window.addEventListener('scroll', bottomReveal);

    //Script responsible for mapping the keyboard buttons for the main slides
    function keyBinder() {
        jQuery(document).bind('keyup', function(e) {
            if(e.keyCode==39) {
                jQuery('a.carousel-control.right').trigger('click');
            } else if (e.keyCode==37) {
                jQuery('a.carousel-control.left').trigger('click');
            }
        });
    }

    //Function responsible for creating a ripple effect
    function rippleEffect() {
        $('.banner').ripples({
            dropRadius: 100,
            perturbance: 100,
            interactive: true,
            resolution: 512,
        });
    }

     //Start Of Counter Up Script
     function numbersCounter() {
        $(".counter").counterUp({
            delay: 10,
            time: 1200,
        });
     }

    //Start of code responsible for handling the swiper
    function cardsSwiper() {
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 6000,
            loop: true,
            coverFlowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    //Script responsible for creating circular text
    function circularText() {
        const text = document.querySelector('.text h5');
        text.innerHTML = text.innerText.split("").map(
            (char, i) => 
            `<span style="transform:rotate(${i * 15}deg)">${char}</span>`).join("");
    }

    //Script responsible for creating circular text in the footer
    function circularTextFooter() {
        const footerText = document.querySelector('.footerText h5');
        footerText.innerHTML = footerText.innerText.split("").map(
            (char, i) => 
            `<span style="transform:rotate(${i * 15}deg)">${char}</span>`).join("");
    }

    //Start Of Function That Reveals AboutUs Text On Scroll
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 0;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    //Start Of Function That Reveals AboutUs Text On Scroll From The Top
    function topReveal() {
        var reveals = document.querySelectorAll(".topReveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 0;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    //Start Of Function That Reveals AboutUs Text On Scroll From The Left
    function leftReveal() {
        var reveals = document.querySelectorAll(".leftReveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 0;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    //Start Of Function That Reveals AboutUs Text On Scroll From The Right
    function rightReveal() {
        var reveals = document.querySelectorAll(".rightReveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 0;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    //Start Of Function That Reveals AboutUs Text On Scroll From The Bottom
    function bottomReveal() {
        var reveals = document.querySelectorAll(".bottomReveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 0;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    //Start of function responsible for showing the newsletter modal form
    function newsletterModalForm() {
        setTimeout(function() {
            $('#newsletterModalForm').modal('show');
        }, 5000);
    }

    //Start of function responsible for bringing the book masterclass modal form to the foreground
    function bookMasterclassModalForm() {
        $('#bookMasterClassModalForm').appendTo("body").modal('show');
        //$('#bookMasterClassModalForm').appendTo("body");
    }

    //Start of function that calculates the age
    function ageCalc() {
        var birthDateInput = document.getElementById("inputDateOfBirth").value;
        var date = new Date();

        //Convert user input value into date object
        var birthDate = new Date(birthDateInput);
        //Get difference between current date and birth date
        var difference = Date.now() - birthDate.getTime();
        var ageDate = new Date(difference);
        var calculatedAge = Math.abs(ageDate.getUTCFullYear() - 1970);

        document.getElementById("inputAge").value = calculatedAge;
    }

    //Start of function that generates the random apprentice id
    function ApprenticeID() {
        //Returns a random integer from 0 to 1,000,000,000
        var random_apprentice_id = document.getElementById("inputApprenticeId");
        random_apprentice_id.value = Math.floor(Math.random() * 1000000001);
    }

    //Start of function that reveals the amount to be paid for the product course chosen/selected
    function productCourseAmount() {
        var productCourse = document.getElementById("inputProductCourse");
        var amount = document.getElementById("inputAmount");

        if (productCourse.value === 'Pastry') {
            amount.value = '10000';
        } else if (productCourse.value === 'Bread') {
            amount.value = '8000';
        } else if (productCourse.value === 'Decoration') {
            amount.value = '3000';
        } else {
            amount.value = '0';
        }
    }

    //Start of register Toggle handler
    var state = false; 
    function toggle_register() {

        if (state) {
            document.getElementById("inputPassword").setAttribute("type", "password");
            document.getElementById("inputPasswordConfirm").setAttribute("type", "password");
            document.querySelector("#togglePassword").classList = 'fa-solid fa-eye-slash';
            state = false;
        } else {
            document.getElementById("inputPassword").setAttribute("type", "text");
            document.getElementById("inputPasswordConfirm").setAttribute("type", "text");
            document.querySelector("#togglePassword").classList = 'fa-solid fa-eye';
            state = true;
        }
    }

    //Start of login Toggle handler 
    function toggle_login() {

        if (state) {
            document.getElementById("inputPassword").setAttribute("type", "password");
            document.querySelector("#togglePassword").classList = 'fa-solid fa-eye-slash';
            state = false;
        } else {
            document.getElementById("inputPassword").setAttribute("type", "text");
            document.querySelector("#togglePassword").classList = 'fa-solid fa-eye';
            state = true;
        }
    }
    





</script>

</body>
</html>
