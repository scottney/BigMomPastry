@extends('layouts.app')

@section('guest-content')

<section id="our-values-area">
    <div class="row pt-3 ourValuesTopContent">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <h5 class="text-white text-center ourValuesHeaderText">Our Values</h5>

            <p class="text-white ourValuesHeaderInfoText">We believe that everyone is <b>entitled</b> to <i>fresh</i>, <i>clean</i>, <i>well baked</i> and <i>affordable</i> <b>pastry</b> and <b>confectionery</b>. With <b>health</b>, <b>customer satisfaction</b> and <b>customer wellbeing</b> being our biggest <i>priorities</i>, we assure our <i>customers</i>, <i>clients</i>, <i>stalk holders</i> and <i>partners</i> that all our <b>products</b> meet the above mentioned <b>qualities</b>.</p>
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <div class="carousel slide carousel-fade" id="ourValuesCarouselSlide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#ourValuesCarouselSlide" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#ourValuesCarouselSlide" data-bs-slide-to="1" class="" aria-label=""></button>
                    <button type="button" data-bs-target="#ourValuesCarouselSlide" data-bs-slide-to="2" class="" aria-label=""></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('/images/cinnamon-roll/cinnamon-roll.jpg')}}" class="ourValuesSlidesImages" alt="cinnamon-roll">
                        <div class="carousel-caption">
                            <h5 class="display-5 text-white text-center ourValuesSlidesText" id="">BigMomPastry's Priority: <b>Customer satisfaction</b></h5>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('/images/cupcakes/cupcakes.jpg')}}" class="ourValuesSlidesImages" alt="cupcakes">
                        <div class="carousel-caption">
                            <h5 class="display-5 text-white text-center ourValuesSlidesText" id="">BigMomPastry's Priority: <b>Customer wellbeing</b></h5>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('/images/masterclass/masterclass-5.jpg')}}" class="ourValuesSlidesImages" alt="doughnuts">
                        <div class="carousel-caption">
                            <h5 class="display-5 text-white text-center ourValuesSlidesText" id="">BigMomPastry's Priority: <b>Customer health</b></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <h5 class="text-white text-center ourValuesBodyText">Our customers/clients inspire us to source and develop the right products to be enjoyed everyday. Their health, lifestyle and enjoyment is our priority.</h5>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <!-- Separator between right margin and section text content -->
        </div>
    </div>

    <div class="row pt-3 pb-5">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="ourValuesCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center ourValuesCardHeaderText">AboutUs Section</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-globe text-white fa-5x"></i>

                    <p class="text-white ourValuesCardBodyText">The journey to giving you an extra ordinary experience with <b><i>pastry</i></b> and <b><i>confectionery</i></b> began years back with nothing but a dream and a vision. Now, being in a position to deliver on both the dream and vision, we are assisting our clients and customers touch base with 'best experiences to <b><i>pastry</i></b> and <b><i>confectionery</i></b>'.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="ourValuesCardFooterText" href="{{route('index')}}#about-us-area"><i class="fa-solid fa-circle-right fa-1x ourValuesCardsIcons" id=""></i>{{ __('Go to AboutUs Section') }}</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="ourValuesCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center ourValuesCardHeaderText">Learn More</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-magnifying-glass text-white fa-5x"></i>

                    <p class="text-white ourValuesCardBodyText"><b><i>BigMomPastry</i></b> has partnered with charity organisations to be able to provide <b><i>free</i></b> and <b><i>affordable</i></b> education to children from poverty stricken households. This has been made possible by donating a percentage of every month's sales to support this innitiative. At <b><i>BigMomPastry</i></b>, we believe that an educated society is a prosperous society.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="ourValuesCardFooterText" href="#"><i class="fa-solid fa-circle-right fa-1x ourValuesCardsIcons" id=""></i>{{ __('Go to Learn More') }}</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="ourValuesCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center ourValuesCardHeaderText">Book A Master Class</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-book text-white fa-5x"></i>

                    <p class="text-white ourValuesCardBodyText">Through our <b>empowerment</b> program, we have trained over 10 <i>master chefs/bakers</i>. We are extremely passionate with assisting people achieve their dreams. As long as you have the love, the passion and the committment to undertake the journey to becoming a professional/master baker/chef, we will impact you with the skills and knowledge you require.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="ourValuesCardFooterText" href="{{route('MasterclassIndex')}}"><i class="fa-solid fa-circle-right fa-1x ourValuesCardsIcons" id=""></i>{{ __('Go to Book A Master Class') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-3 pb-5">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="ourValuesCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center ourValuesCardHeaderText">Find A BigMomPastry Outlet</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-shop text-white fa-5x"></i>

                    <p class="text-white ourValuesCardBodyText">We have established ourselves across <b><i>Nairobi</i></b>. Through these <i>outlets</i>, <b>clients</b> and <b>customers</b> can be able to pick up <i>orders</i> if they aren't cormfortable receiving <i>orders</i> at <b>work</b> or at <b>home</b>. <i>Orders</i> are <b>shipped</b> to <i>specific geographical regions</i> according to the <i>outlets</i> that are closest to the <b>customer's</b> or <b>client's</b> order <i>location</i>.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="ourValuesCardFooterText" href="#"><i class="fa-solid fa-circle-right fa-1x ourValuesCardsIcons" id=""></i>{{ __('Go to Find A BigMomPastry Outlet') }}</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="ourValuesCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center ourValuesCardHeaderText">Sustainability At BigMomPastry</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-seedling text-white fa-5x"></i>

                    <p class="text-white ourValuesCardBodyText">For years, <b>BigMomPastry</b> has not only championed the importance of preserving the environment, but also spear headed efforts in caring for it. By planning, organising and participating in tree planting actictivities, we have planted over <i>1000</i> seedlings across the country. We are looking forward to planting over <i>10,000</i> trees within the next <i>5 years</i>.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="ourValuesCardFooterText" href="#"><i class="fa-solid fa-circle-right fa-1x ourValuesCardsIcons" id=""></i>{{ __('Go to Sustainability At BigMomPastry') }}</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="ourValuesCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center ourValuesCardHeaderText">BigMomPastry Kenya</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-cake-candles text-white fa-5x"></i>

                    <p class="text-white ourValuesCardBodyText">At <b><i>BigMomPastry</i></b> <i>kenya</i>, we are committed to delivering fresh and healthy products to our customers and clients. Our customers and clients are our biggest priorities.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="ourValuesCardFooterText" href="{{route('index')}}"><i class="fa-solid fa-circle-right fa-1x ourValuesCardsIcons" id=""></i>{{ __('Go to BigMomPastry Kenya') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row pb-3">
        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <!-- Content separator between the main content and the margins -->
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <h5 class="display-6 text-white ourValuesSectionHeaderText">Ingridients</h5>

            <p class="text-white ourValuesSectionContentText">Our ingredients are carefully selected and prepared at the peak of freshness to have a great taste, preserve nutritional benefits and bring maximum enjoyment. We don't use any artificial ingridients or colourings to extend the shelf life of our products. We continually develop new products that use locally sourced, seasoned fruits and vegetables.</p>
        </div>

        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <!-- Content separator between the main content and the margins -->
        </div>
    </div>

    <div class="row pb-3">
        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <!-- Content separator between the main content and the margins -->
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <h5 class="display-6 text-white ourValuesSectionHeaderText">Healthy Products</h5>

            <p class="text-white ourValuesSectionContentText">BigMomPastry has always been committed to offering healthy products which contribute to a balanced diet and healthy lifestyle. We offer an increasing range of items designed to meet changing customer and client preferences.</p>
        </div>

        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <!-- Content separator between the main content and the margins -->
        </div>
    </div>

    <div class="row pb-3">
        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <!-- Content separator between the main content and the margins -->
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <h5 class="display-6 text-white ourValuesSectionHeaderText">Allergens</h5>

            <p class="text-white ourValuesSectionContentText">We want our customers to have confidence in their choice and therefore we provide extensive allergen training to all our staff members. Hence, we provide a full allergen list of all our products on our website an in-store. Don't hesitate to ask our teams and staff for assistance if you have any allergens or dietary requirements.</p>
        </div>

        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <!-- Content separator between the main content and the margins -->
        </div>
    </div>

</section>

@endsection