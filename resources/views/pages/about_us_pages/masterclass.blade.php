@extends('layouts.app')

@section('guest-content')

<section id="masterclass-area">
	<div class="row pt-3 pb-3 masterClassTopContent">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <h5 class="text-white text-center masterClassHeaderText">Book A Masterclass</h5>
            <p class="text-white masterClassHeaderInfoText">Our <b>masterclass</b> has been <i>designed</i> and <i>tested</i> over time to achieve <b><i>perfection</i></b> for our trainess. Our staff have been practicing within the work environment, everything that they teach to the apprentice's. These skills, have been validated by the <b>market</b> as fit, because of the markets' response to our products.</p>

            <p class="text-white masterClassHeaderInfoText">Booking a <b>Masterclass</b> is a 4 steps process:</p>
            <div class="carousel slide" id="bookMasterClassStepsCarouselSlide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card border bg-warning">
                            <div class="card-header">
                                <div class="card-title"></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <i class="fa-solid fa-id-card fa-2x"></i>
                                    </div>
                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                        <p>Fill in your personal details and contact information for easy communication. Once complete, proceed to the next step.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card border bg-warning">
                            <div class="card-header">
                                <div class="card-title"></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <i class="fa-solid fa-certificate fa-2x"></i>
                                    </div>
                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                        <p>Select the specific course that you want to apprentice in with us.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card border bg-warning">
                            <div class="card-header">
                                <div class="card-title"></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <i class="fa-solid fa-coins fa-2x"></i>
                                    </div>
                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                        <p>Select your preferred payment method and complete your payment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card border bg-warning">
                            <div class="card-header">
                                <div class="card-title"></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <i class="fa-solid fa-file-invoice-dollar fa-2x"></i>
                                    </div>
                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                        <p>Confirm payment details within our system and await further communication from our team.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>

                </div>
            </div>

            <p class="pt-5 text-white masterClassHeaderInfoText">Your <b>journey</b> to becoming a <b>master baker</b> begins <i>here</i>. Book right now...</p>

            <i class="fa-solid fa-book-open-reader fa-2x bookMasterClassLinkIcon"></i><a href="{{route('MasterclassForm')}}" class="bookMasterClassLink">Book a Masterclass</a>

            @if(Session::has('book-masterclass-successfull'))
                <div class="alert alert-success alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><i class="fa-solid fa-circle-check"></i>{{Session::get('book-masterclass-successfull')}}
                </div>
            @endif
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <div class="carousel slide carousel-fade" id="masterClassCarouselSlide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#masterClassCarouselSlide" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#masterClassCarouselSlide" data-bs-slide-to="1" class="" aria-label=""></button>
                    <button type="button" data-bs-target="#masterClassCarouselSlide" data-bs-slide-to="2" class="" aria-label=""></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('/images/masterclass/masterclass.jpg')}}" class="masterClassSlidesImages" alt="masterclass">
                        <div class="carousel-caption">
                            <h5 class="display-5 text-white text-center masterClassSlidesText" id=""></h5>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('/images/masterclass/masterclass-1.jpg')}}" class="masterClassSlidesImages" alt="hamburger-masterclass">
                        <div class="carousel-caption">
                            <h5 class="display-5 text-white text-center masterClassSlidesText" id=""></h5>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('/images/masterclass/masterclass-4.jfif')}}" class="masterClassSlidesImages" alt="chief-baker-masterclass">
                        <div class="carousel-caption">
                            <h5 class="display-5 text-white text-center masterClassSlidesText" id=""></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row darkShade">
        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
        <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
            <h5 class="text-white text-center masterClassBodyText">Our apprentice program is designed to impact everyone.</h5>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
    </div>

    <div class="row pt-5">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center masterClassCardHeaderText">AboutUs</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-globe text-white fa-5x"></i>

                    <p class="text-white masterClassCardBodyText">The journey to giving you an extra ordinary experience with <b><i>pastry</i></b> and <b><i>confectionery</i></b> began years back with nothing but a dream and a vision. Now, being in a position to deliver on both the dream and vision, we are assisting our clients and customers touch base with 'best experiences to <b><i>pastry</i></b> and <b><i>confectionery</i></b>'.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="masterClassCardFooterText" href="{{route('aboutUsIndex')}}"><i class="fa-solid fa-circle-right fa-1x masterClassCardsIcons" id=""></i>{{ __('Go to AboutUs') }}</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center masterClassCardHeaderText">Learn More</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-magnifying-glass text-white fa-5x"></i>

                    <p class="text-white masterClassCardBodyText"><b><i>BigMomPastry</i></b> has partnered with charity organisations to be able to provide <b><i>free</i></b> and <b><i>affordable</i></b> education to children from poverty stricken households. This has been made possible by donating a percentage of every month's sales to support this innitiative. At <b><i>BigMomPastry</i></b>, we believe that an educated society is a prosperous society.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="masterClassCardFooterText" href="#"><i class="fa-solid fa-circle-right fa-1x masterClassCardsIcons" id=""></i>{{ __('Go to Learn More') }}</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center masterClassCardHeaderText">Our Values</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-hand-holding text-white fa-5x"></i>

                    <p class="text-white masterClassCardBodyText"><b>BigMomPastry</b> operates under a strict code of <i>moral conduct</i>. Our <i>values</i>, instilled to us since commencement of business operations, act as a compass/guide to how we conduct business. Thus making it possible for us to do right whenever and wherever.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="masterClassCardFooterText" href="{{route('ourValues')}}"><i class="fa-solid fa-circle-right fa-1x masterClassCardsIcons" id=""></i>{{ __('Go to Our Values') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5 pb-5">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center masterClassCardHeaderText">Find A BigMomPastry Outlet</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-shop text-white fa-5x"></i>

                    <p class="text-white masterClassCardBodyText">We have established ourselves across <b><i>Nairobi</i></b>. Through these <i>outlets</i>, <b>clients</b> and <b>customers</b> can be able to pick up <i>orders</i> if they aren't cormfortable receiving <i>orders</i> at <b>work</b> or at <b>home</b>. <i>Orders</i> are <b>shipped</b> to <i>specific geographical regions</i> according to the <i>outlets</i> that are closest to the <b>customer's</b> or <b>client's</b> order <i>location</i>.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="masterClassCardFooterText" href="#"><i class="fa-solid fa-circle-right fa-1x masterClassCardsIcons" id=""></i>{{ __('Go to Find A BigMomPastry Outlet') }}</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center masterClassCardHeaderText">Sustainability At BigMomPastry</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-seedling text-white fa-5x"></i>

                    <p class="text-white masterClassCardBodyText">For years, <b>BigMomPastry</b> has not only championed the importance of preserving the environment, but also spear headed efforts in caring for it. By planning, organising and participating in tree planting actictivities, we have planted over <i>1000</i> seedlings across the country. We are looking forward to planting over <i>10,000</i> trees within the next <i>5 years</i>.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="masterClassCardFooterText" href="{{route('sustainability')}}"><i class="fa-solid fa-circle-right fa-1x masterClassCardsIcons" id=""></i>{{ __('Go to Sustainability At BigMomPastry') }}</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center masterClassCardHeaderText">BigMomPastry Kenya</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-cake-candles text-white fa-5x"></i>

                    <p class="text-white masterClassCardBodyText">At <b><i>BigMomPastry</i></b> <i>kenya</i>, we are committed to delivering fresh and healthy products to our customers and clients. Our customers and clients are our biggest priorities.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="masterClassCardFooterText" href="{{route('index')}}"><i class="fa-solid fa-circle-right fa-1x masterClassCardsIcons" id=""></i>{{ __('Go to BigMomPastry Kenya') }}</a>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection