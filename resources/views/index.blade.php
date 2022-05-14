@extends('layouts.app')

@section('guest-content')

<section id="top-content">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 no-padding">
			<div class="carousel slide main-slide" id="mainPageSlides" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#mainPageSlides" data-bs-slide-to="0" class="active" aria-current="true"></button>
					<button type="button" data-bs-target="#mainPageSlides" data-bs-slide-to="1" class="" aria-label=""></button>
					<button type="button" data-bs-target="#mainPageSlides" data-bs-slide-to="2" class="" aria-label=""></button>
					<button type="button" data-bs-target="#mainPageSlides" data-bs-slide-to="3" class="" aria-label=""></button>
					<button type="button" data-bs-target="#mainPageSlides" data-bs-slide-to="4" class="" aria-label=""></button>
					<button type="button" data-bs-target="#mainPageSlides" data-bs-slide-to="5" class="" aria-label=""></button>
					<button type="button" data-bs-target="#mainPageSlides" data-bs-slide-to="6" class="" aria-label=""></button>
					<button type="button" data-bs-target="#mainPageSlides" data-bs-slide-to="7" class="" aria-label=""></button>
				</div>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="{{url('/images/pastry.jpg')}}" class="main-slide-images" alt="pastry">
						<div class="carousel-caption">
							<h5 class="display-6 text-white text-center main-slide-text" id="">PASTRY AND CONFECTIONERY</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/cakes/cake.jpg')}}" class="main-slide-images" alt="Cakes">
						<div class="carousel-caption">
							<h5 class="display-6 text-white text-center main-slide-text" id="">CAKES</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/buns/buns.jpg')}}" class="main-slide-images" alt="Buns">
						<div class="carousel-caption">
							<h5 class="display-6 text-white text-center main-slide-text" id="">BUNS</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/doughnuts/doughnuts.jpg')}}" class="main-slide-images" alt="Doughnuts">
						<div class="carousel-caption">
							<h5 class="display-6 text-white text-center main-slide-text" id="">DOUGHNUTS</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/pizza/pizza.jpg')}}" class="main-slide-images" alt="Pizza">
						<div class="carousel-caption">
							<h5 class="display-6 text-white text-center main-slide-text" id="">PIZZA</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/swiss-roll/swiss-roll.jpg')}}" class="main-slide-images" alt="Swiss Roll">
						<div class="carousel-caption">
							<h5 class="display-6 text-white text-center main-slide-text" id="">SWISS ROLL</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/croissants/croissants.jpg')}}" class="main-slide-images" alt="Croissants">
						<div class="carousel-caption">
							<h5 class="display-6 text-white text-center main-slide-text" id="">CROISSANTS</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/canele/canele.jpg')}}" class="main-slide-images" alt="Canele">
						<div class="carousel-caption">
							<h5 class="display-6 text-white text-center main-slide-text" id="">CANELE</h5>
						</div>
					</div>
				</div>
				
				<button class="carousel-control-prev mainSlideCarouselButtons" type="button" data-bs-target="#mainPageSlides" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				</button>
				  
				<button class="carousel-control-next mainSlideCarouselButtons" type="button" data-bs-target="#mainPageSlides" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>
</section>

<section id="logo-area">
	<div class="row pt-3 pb-3" id="area-logo">
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-5">
			<div class="circle topReveal">
				<div class="logo">
					<div class="text">
						<h5 class="text-white">BIGMOMPASTRY</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 p-5">
			<div class="motto topReveal">
				<h5 class="display-6 text-white text-center logo-area-text"><span class="typed-text"></span><span class="ourCursor">&nbsp;</span></h5>
			</div>
		</div>
	</div>
</section>

<section id="satisfy-area">
	<div class="row pt-5 pb-3 darkShade">
		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
			<!-- Separator between content and the left margin -->
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 p-1">
			<div class="carousel slide carousel-fade" id="tastyPastry" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
								<h5 class="display-6 text-white p-1 sweetToothHeaderText">Satisfy Your Sweet Tooth</h5>

								<p class="text-white p-1 sweetToothMiniText">At <b><i>BigMomPastry</i></b>, we believe that <b><i>perfection</i> is not a <i>destination</i></b> but a <i>journey</i>. So, whether it's eclairs, chocolate, bread, cakes, cookies, buns, rolls, or milkshakes, <b><i>BigMomPastry</i></b> has you covered. With <strong>pastry and confectionery</strong> ranging from across multiple nationalities, our <i>chefs</i> will give you the experience of a <b><i>lifetime</i></b>.</p>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
								<h5 class="display-6 text-white p-1 sweetToothHeaderText">Come For The Pastry and Confectionery, Stay For The Atmosphere</h5>

								<p class="text-white p-1 sweetToothMiniText">At <b>BigMomPastry</b>, <i>food</i>, <i>design,</i> and <i>ambiance</i> come together to create an <i>unforgettable sensory experience</i>. A <i>culinary</i> adventure for all the <i>senses</i>. Enjoy pure, natural, nutritious pastry and confectionery that tastes amazing. <b>Experience</b> food and allow it to meet your <i>soul</i>. Here, we give a refined <b><i>experience</i></b> to those who <b><i>appreciate</i></b> the finer things in <b><i>life</i></b>.
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-1">
					<div class="card text-center rightReveal homePageCards">
						<div class="card-header">
							<div class="card-title">
								<h5 class="display-6 homePageCardsTitle">Pastry</h5>
							</div>
						</div>

						<div class="card-body">
							<div class="carousel slide carousel-fade" id="carouselPastryFade" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active" id="pastryItem1"></div>

									<div class="carousel-item" id="pastryItem2"></div>

									<div class="carousel-item" id="pastryItem3"></div>

									<div class="carousel-item" id="pastryItem4"></div>

									<div class="carousel-item" id="pastryItem5"></div>
								</div>
							</div>
						</div>

						<div class="card-footer">
							<a class="homePageCardsIcon" href=""><p><i class="fa-solid fa-circle-right fa-1x p-1 homePageIconCards"></i>Go to <b><i>Pastry Inventory</i></b></p></a>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-1">
					<div class="card text-center bottomReveal homePageCards">
						<div class="card-header">
							<div class="card-title">
								<h5 class="display-6 homePageCardsTitle">Confectionery</h5>
							</div>
						</div>

						<div class="card-body">
							<div class="carousel slide carousel-fade" id="carouselPastryFade" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active" id="confectioneryItem1"></div>

									<div class="carousel-item" id="confectioneryItem2"></div>

									<div class="carousel-item" id="confectioneryItem3"></div>

									<div class="carousel-item" id="confectioneryItem4"></div>

									<div class="carousel-item" id="confectioneryItem5"></div>
								</div>
							</div>
						</div>

						<div class="card-footer">
							<a class="homePageCardsIcon" href=""><p><i class="fa-solid fa-circle-right fa-1x p-1 homePageIconCards"></i>Go to <b><i>Confectionery Inventory</i></b></p></a>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-1">
					<div class="card text-center leftReveal homePageCards">
						<div class="card-header">
							<div class="card-title">
								<h5 class="display-6 homePageCardsTitle">Drinks</h5>
							</div>
						</div>

						<div class="card-body">
							<div class="carousel slide carousel-fade" id="carouselPastryFade" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active" id="drinksItem1"></div>

									<div class="carousel-item" id="drinksItem2"></div>

									<div class="carousel-item" id="drinksItem3"></div>

									<div class="carousel-item" id="drinksItem4"></div>

									<div class="carousel-item" id="drinksItem5"></div>
								</div>
							</div>
						</div>

						<div class="card-footer">
							<a class="homePageCardsIcon" href=""><p><i class="fa-solid fa-circle-right fa-1x p-1 homePageIconCards"></i>Go to <b><i>Drinks Inventory</i></b></p></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
			<!-- Separator between content and the right margin -->
		</div>
	</div>

	<div class="row pt-3 pb-3 darkShade">
		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
			<!-- Separator between content and the left margin -->
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 p-1">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-1">
					<div class="card text-center topReveal homePageCards">
						<div class="card-header">
							<div class="card-title">
								<h5 class="display-6 homePageCardsTitle">FastFoods</h5>
							</div>
						</div>

						<div class="card-body">
							<div class="carousel slide carousel-fade" id="carouselPastryFade" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active" id="fastfoodsItem1"></div>

									<div class="carousel-item" id="fastfoodsItem2"></div>

									<div class="carousel-item" id="fastfoodsItem3"></div>

									<div class="carousel-item" id="fastfoodsItem4"></div>

									<div class="carousel-item" id="fastfoodsItem5"></div>
								</div>
							</div>
						</div>

						<div class="card-footer">
							<a class="homePageCardsIcon" href=""><p><i class="fa-solid fa-circle-right fa-1x p-1 homePageIconCards"></i>Go to <b><i>FastFoods Inventory</i></b></p></a>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-1">
					<div class="card text-center rightReveal homePageCards">
						<div class="card-header">
							<div class="card-title">
								<h5 class="display-6 homePageCardsTitle">Salads</h5>
							</div>
						</div>

						<div class="card-body">
							<div class="carousel slide carousel-fade" id="carouselPastryFade" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active" id="saladsItem1"></div>

									<div class="carousel-item" id="saladsItem2"></div>

									<div class="carousel-item" id="saladsItem3"></div>

									<div class="carousel-item" id="saladsItem4"></div>

									<div class="carousel-item" id="saladsItem4"></div>
								</div>
							</div>
						</div>

						<div class="card-footer">
							<a class="homePageCardsIcon" href=""><p><i class="fa-solid fa-circle-right fa-1x p-1 homePageIconCards"></i>Go to <b><i>Salads Inventory</i></b></p></a>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-1"></div>
			</div>
		</div>

		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
			<!-- Separator between content and the right margin -->
		</div>
	</div>
</section>

<section id="AnyOccasion">
	<div class="row pt-3">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-6 text-center text-white occasionsTitleText">With You Every Step Of The Way</h5>

			<p class="text-white text-center"><b><i>BigMomPastry</i></b> will be with you through every step in <i>life.</i></p>

			<div class="swiper-container pt-3 pb-3">
				<div class="swiper-wrapper">
					<div class="swiper-slide homePageSlides" id="homePageSlide1">
						<div class="sliding-cards-black-shade">
							<h5 class="display-6 slide-cards-header-text text-white" id=""><i class="fa-solid fa-heart"></i><b><i>Courtship</i></b></h5>
							<p class="slide-cards-text text-white" id="">We have been there fueling the fire, fueling the romance between couples with state-of-the-art pastry and confectionery.</p>
						</div>
					</div>

					<div class="swiper-slide homePageSlides" id="homePageSlide2">
						<div class="sliding-cards-black-shade">
							<h5 class="display-6 slide-cards-header-text text-white" id=""><i class="fa-solid fa-clock"></i><b><i>Gestation</i></b></h5>
							<p class="slide-cards-text text-white" id="">As couples patiently wait for their bundle of joy, we have been there, serving them the best pastry and confectionery money could buy.</p>
						</div>
					</div>

					<div class="swiper-slide homePageSlides" id="homePageSlide3">
						<div class="sliding-cards-black-shade">
							<h5 class="display-6 slide-cards-header-text text-white" id=""><i class="fa-solid fa-baby"></i><b><i>The patter of tiny feet</i></b></h5>
							<p class="slide-cards-text text-white" id="">When couples had their baby, we were there to share in their joy, by serving them the freshest fruits and vegetables salad that money could buy.</p>
						</div>
					</div>

					<div class="swiper-slide homePageSlides" id="homePageSlide4">
						<div class="sliding-cards-black-shade">
							<h5 class="display-6 slide-cards-header-text text-white" id=""><i class="fa-solid fa-gifts"></i><b><i>Birthdays</i></b></h5>
							<p class="slide-cards-text text-white" id="">Annually, as you celebrate your birthday, we have been there. Serving you the most affordable, best, and tasty pastry.</p>
						</div>
					</div>

					<div class="swiper-slide homePageSlides" id="homePageSlide5">
						<div class="sliding-cards-black-shade">
							<h5 class="display-6 slide-cards-header-text text-white" id=""><i class="fas fa-cake"></i><b><i>Special Occasions</i></b></h5>
							<p class="slide-cards-text text-white" id="">We have been there with you through the graduations, job promotions, marriage proposals, and even at weddings. Serving you nothing but the best and finest pastry and confectionery.</p>
						</div>
					</div>

				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</section>

<section id="sales-counter">
	<div class="row darkShade">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-6 text-center text-white chooseUsTitleText">Why Choose Us?</h5>
		</div>
	</div>

	<div class="row darkShade">
		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="card chooseUsCards">
				<div class="class-header">
					<div class="class-title"></div>
				</div>

				<div class="class-body">
					<h5 class="display-6 text-center text-white chooseUsCardsText">Quality Ingridients</h5>
				</div>

				<div class="class-footer"></div>
			</div>
		</div>

		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="card chooseUsCards">
				<div class="class-header">
					<div class="class-title"></div>
				</div>

				<div class="class-body">
					<h5 class="display-6 text-center text-white chooseUsCardsText">Fresh Products</h5>
				</div>

				<div class="class-footer"></div>
			</div>
		</div>

		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="card chooseUsCards">
				<div class="class-header">
					<div class="class-title"></div>
				</div>

				<div class="class-body">
					<h5 class="display-6 text-center text-white chooseUsCardsText">Healthy Products</h5>
				</div>

				<div class="class-footer"></div>
			</div>
		</div>

		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="card chooseUsCards">
				<div class="class-header">
					<div class="class-title"></div>
				</div>

				<div class="class-body">
					<h5 class="display-6 text-center text-white chooseUsCardsText">Custom Tailored Products</h5>
				</div>

				<div class="class-footer"></div>
			</div>
		</div>
	</div>

	<div class="row pt-3 darkShade">
		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="card chooseUsCards">
				<div class="class-header">
					<div class="class-title"></div>
				</div>

				<div class="class-body">
					<h5 class="display-6 text-center text-white chooseUsCardsText">Great Customer Experience</h5>
				</div>

				<div class="class-footer"></div>
			</div>
		</div>

		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="card chooseUsCards">
				<div class="class-header">
					<div class="class-title"></div>
				</div>

				<div class="class-body">
					<h5 class="display-6 text-center text-white chooseUsCardsText">Different Product Taste</h5>
				</div>

				<div class="class-footer"></div>
			</div>
		</div>

		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="card chooseUsCards">
				<div class="class-header">
					<div class="class-title"></div>
				</div>

				<div class="class-body">
					<h5 class="display-6 text-center text-white chooseUsCardsText">Affordable Products</h5>
				</div>

				<div class="class-footer"></div>
			</div>
		</div>

		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="card chooseUsCards">
				<div class="class-header">
					<div class="class-title"></div>
				</div>

				<div class="class-body">
					<h5 class="display-6 text-center text-white chooseUsCardsText">2+ Years of Experience</h5>
				</div>

				<div class="class-footer"></div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
			<div class=""><i class="fa fa-clock fa-3x text-white"></i></div>
			<p class="text-white counter" style="font-size: 30px;">3000</p>
			<p class="text-white" style="font-size: 24px;"><b>+</b></p>
	        <p class="text-white" style="font-size: 24px;"><b>Working Hours</b></p>
	    </div>

	    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	    	<div class=""><i class="fas fa-shopping-bag fa-3x text-white"></i></div>
	    	<p class="text-white counter" style="font-size: 30px;">10000</p>
	    	<p class="text-white" style="font-size: 24px;"><b>+</b></p>
	    	<p class="text-white" style="font-size: 24px;"><b>Orders</b></p>
	    </div>

	    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	    	<div class=""><i class="fas fa-shipping-fast fa-3x text-white"></i></div>
	    	<p class="text-white counter" style="font-size: 30px;">30000</p>
	    	<p class="text-white" style="font-size: 24px;"><b>+</b></p>
	    	<p class="text-white" style="font-size: 24px;"><b>Delivered Pieces</b></p>
	    </div>

	    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	    	<div class=""><i class="fas fa-store-alt fa-3x text-white"></i></div>
	    	<p class="text-white counter" style="font-size: 30px;">10</p>
	    	<p class="text-white" style="font-size: 24px;"><b>+</b></p>
	    	<p class="text-white" style="font-size: 24px;"><b>Outlets</b></p>
	    </div>
	</div>
</section>

<section id="testimonialsSection">
	<div class="row pt-3 darkShade">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-6 text-white text-center testimonialHeaderText">Testimonials</h5>
		</div>
	</div>
	<div class="row pt-3 pb-5 darkShade">
		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
			<h5 class="display-6 text-white text-center customersTestimonialHeaderText">Customers Testimonials</h5>

			<div class="card bg-secondary">
				<div class="card-header">
					<div class="card-title"></div>
				</div>

				<div class="card-body"></div>

				<div class="card-footer"></div>
			</div>
		</div>

		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
			<h5 class="display-6 text-white text-center employeesTestimonialHeaderText">Employees Testimonials</h5>

			<div class="card bg-secondary">
				<div class="card-header">
					<div class="card-title"></div>
				</div>

				<div class="card-body"></div>

				<div class="card-footer"></div>
			</div>
		</div>
	</div>
</section>

@endsection




