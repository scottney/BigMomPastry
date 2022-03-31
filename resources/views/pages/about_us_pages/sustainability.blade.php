@extends('layouts.app')

@section('guest-content')

<section id="sustainability-area">
	<div class="row pt-3 sustainabilityTopContent">
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
			<h5 class="text-white text-center sustainabilityHeaderText">Sustainability at BigMomPastry</h5>
		</div>

		<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <div class="carousel slide carousel-fade" id="sustainabilityCarouselSlide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#sustainabilityCarouselSlide" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#sustainabilityCarouselSlide" data-bs-slide-to="1" class="" aria-label=""></button>
                    <button type="button" data-bs-target="#sustainabilityCarouselSlide" data-bs-slide-to="2" class="" aria-label=""></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('/images/sustainability/wheat-2.jfif')}}" class="sustainabilitySlidesImages" alt="wheat">
                        <div class="carousel-caption">
                            <h5 class="display-5 text-white text-center sustainabilitySlidesText" id=""></h5>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('/images/sustainability/seedling.jpg')}}" class="sustainabilitySlidesImages" alt="seedlings">
                        <div class="carousel-caption">
                            <h5 class="display-5 text-white text-center sustainabilitySlidesText" id=""></h5>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('/images/sustainability/trees-2.jpg')}}" class="sustainabilitySlidesImages" alt="trees">
                        <div class="carousel-caption">
                            <h5 class="display-5 text-white text-center sustainabilitySlidesText" id=""></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
	</div>

	<div class="row pt-5"></div>
</section>

@endsection