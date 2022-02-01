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
    <!-- Script handler for projects counter -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for waypoints -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Sweetalert notifications -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Swiper -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js" integrity="sha512-pY1t/ADgTwbfGbw0+mRGd33EroA5YgRUWhQNFpPIAdBzyoSb38FsFrf4wBTcS3GFPdTfgtpRrbGCkdl2C2OXYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->

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
                <a class="navbar-brand text-white styled-text bottom-style" href="{{ url('/') }}">{{ config('app.name', 'BigMomPastry') }}</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white styled-text bottom-style" href="">{{ __('Products') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white styled-text bottom-style" href="">{{ __('Blog') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white styled-text bottom-style" href="">{{ __('Operations') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white styled-text bottom-style" href="">{{ __('About Us') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white styled-text bottom-style" href="">{{ __('Contacts') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white styled-text background-style" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white styled-text background-style" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container-fluid pt-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

<!-- Script handler for swiper -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>

    //Script responsible for mapping the keyboard buttons for the main slides
    jQuery(document).bind('keyup', function(e) {
            if(e.keyCode==39) {
                jQuery('a.carousel-control.right').trigger('click');
            } else if (e.keyCode==37) {
                jQuery('a.carousel-control.left').trigger('click');
            }
        });

    //Script responsible for creating circular text
    const text = document.querySelector('.text h5');
    text.innerHTML = text.innerText.split("").map(
        (char, i) => 
        `<span style="transform:rotate(${i * 15}deg)">${char}</span>`).join("");

    //Script responsible for making text fade in when scrolling down the page
    $(window).on("load",function() {
        $(window).scroll(function() {
            var windowBottom = $(this).scrollTop() + $(this).innerHeight();
            $("#area-logo").each(function() {
                /* Check the location of each desired element */
                var objectBottom = $(this).offset().top + $(this).outerHeight();

                /* If the element is completely within bounds of the window, fade it in */
                if (objectBottom < windowBottom) { //object comes into view (scrolling down)
                    if ($(this).css("opacity")==0) {
                        $(this).fadeTo(3000,1);
                    }
                } else { //object goes out of view (scrolling up)
                    if ($(this).css("opacity")==1) {
                        $(this).fadeTo(3000,0);
                    }
                }
            });
        }).scroll(); //invoke scroll-handler on page-load
    });

    //Start of code responsible for handling the swiper
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

    //Start Of Counter Up Script
    $(document).ready(function(){
        $(".counter").counterUp({
            delay: 10,
            time: 1200,
        });
    });





</script>

</body>
</html>
