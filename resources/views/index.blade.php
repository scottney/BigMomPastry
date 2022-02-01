@extends('layouts.app')

@section('content')

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
							<h5 class="display-5 text-white text-center main-slide-text" id="">PASTRY AND CONFECTIONERY</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/cakes/cake.jpg')}}" class="main-slide-images" alt="Cakes">
						<div class="carousel-caption">
							<h5 class="display-5 text-white text-center main-slide-text" id="">CAKES</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/buns/buns.jpg')}}" class="main-slide-images" alt="Buns">
						<div class="carousel-caption">
							<h5 class="display-5 text-white text-center main-slide-text" id="">BUNS</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/doughnuts/doughnuts.jpg')}}" class="main-slide-images" alt="Doughnuts">
						<div class="carousel-caption">
							<h5 class="display-5 text-white text-center main-slide-text" id="">DOUGHNUTS</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/pizza/pizza.jpg')}}" class="main-slide-images" alt="Pizza">
						<div class="carousel-caption">
							<h5 class="display-5 text-white text-center main-slide-text" id="">PIZZA</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/swiss-roll/swiss-roll.jpg')}}" class="main-slide-images" alt="Swiss Roll">
						<div class="carousel-caption">
							<h5 class="display-5 text-white text-center main-slide-text" id="">SWISS ROLL</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/croissants/croissants.jpg')}}" class="main-slide-images" alt="Croissants">
						<div class="carousel-caption">
							<h5 class="display-5 text-white text-center main-slide-text" id="">CROISSANTS</h5>
						</div>
					</div>

					<div class="carousel-item">
						<img src="{{url('/images/canele/canele.jpg')}}" class="main-slide-images" alt="Canele">
						<div class="carousel-caption">
							<h5 class="display-5 text-white text-center main-slide-text" id="">CANELE</h5>
						</div>
					</div>
				</div>
				
				<button class="carousel-control-prev main-slide-buttons" type="button" data-bs-target="#mainPageSlides" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				</button>
				  
				<button class="carousel-control-next" type="button" data-bs-target="#mainPageSlides" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>
</section>

<section id="logo-area">
	<div class="row pt-5 pb-5" id="area-logo">
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-5">
			<div class="circle">
				<div class="logo">
					<div class="text">
						<h5 class="text-white">BIGMOMPASTRY</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 p-5">
			<div class="motto">
				<h5 class="display-3 text-white text-center logo-area-text">Live the sweet life...</h5>
			</div>
		</div>
	</div>
</section>

<section id="products-area">
	<div class="row" id="area-products">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<h5 class="display-3 text-white text-center pt-5 products-header-text">PRODUCTS</h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="blog-area">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<h5 class="display-3 text-white text-center pt-5 blog-header-text">BLOG</h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="operations-area">
	<div class="row pb-5" id="area-operations">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<h5 class="display-3 text-white text-center pt-5 operations-header-text">OPERATIONS</h5>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" id="sliding-cards">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide" id="slide-1">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Customers Operations</i></b></h5>
									<p class="slide-cards-text text-white" id="">To all our esteemed customers, this is how the process works for you...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-2">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Visit Our Platforms</i></b></h5>
									<p class="slide-cards-text text-white" id="">Visit our online platform or any of our retail/distribution outlets...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-3">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Browse Catalogue</i></b></h5>
									<p class="slide-cards-text text-white" id="">Go through our products catalogue and select what pleases you...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-4">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Select/Choose Pastry</i></b></h5>
									<p class="slide-cards-text text-white" id="">Pick the item that is best appealing to you...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-5">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Order</i></b></h5>
									<p class="slide-cards-text text-white" id="">Once you have chosen what you find appealing within our array of products, complete your order...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-6">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Pay</i></b></h5>
									<p class="slide-cards-text text-white" id="">Make payments for the pastry you have selected/chosen...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-7">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Wait</i></b></h5>
									<p class="slide-cards-text text-white" id="">If the pastry item has not been prepared and stocked, patiently wait for our chefs/bakers to prepare your order...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-8">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>BigMomPastry Operations</i></b></h5>
									<p class="slide-cards-text text-white" id="">As your main primary pastry and confectionery producer, this is how the process works for us...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-9">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Receive Order</i></b></h5>
									<p class="slide-cards-text text-white" id="">As your main pastry and confectionery producer, we will first receive your order...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-10">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Confirm Payments</i></b></h5>
									<p class="slide-cards-text text-white" id="">Before getting started we will have to confirm that you have paid for the items ordered...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-11">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Prepare Order</i></b></h5>
									<p class="slide-cards-text text-white" id="">Once payment confirmation has been made, we will process and prepare your orders...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-12">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Package Order</i></b></h5>
									<p class="slide-cards-text text-white" id="">We will package your order...</p>
								</div>
							</div>
							<div class="swiper-slide" id="slide-13">
								<div class="sliding-cards-black-shade">
									<h5 class="slide-cards-header-text text-white" id=""><b><i>Deliver/Ship Order</i></b></h5>
									<p class="slide-cards-text text-white" id="">Finally, we will deliver your order to your preffered destination or your doorstep...</p>
								</div>
							</div>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>

			</div>

			<div class="row" id="sales-counter">
	            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	                <div class=""><i class="fa fa-clock fa-5x text-white"></i></div>
	                <p class="text-white counter" style="font-size: 60px;">250</p>
	                <p class="text-white" style="font-size: 24px;"><b>Working Hours</b></p>
	            </div>

	            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	                <div class=""><i class="fas fa-shopping-bag fa-5x text-white"></i></div>
	                <p class="text-white counter" style="font-size: 60px;">1000</p>
	                <p class="text-white" style="font-size: 24px;"><b>Orders</b></p>
	            </div>

	            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	                <div class=""><i class="fas fa-shipping-fast fa-5x text-white"></i></div>
	                <p class="text-white counter" style="font-size: 60px;">3000</p>
	                <p class="text-white" style="font-size: 24px;"><b>Delivered Pieces</b></p>
	            </div>

	            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	                <div class=""><i class="fas fa-store-alt fa-5x text-white"></i></div>
	                <p class="text-white counter" style="font-size: 60px;">10</p>
	                <p class="text-white" style="font-size: 24px;"><b>Outlets</b></p>
	            </div>
	        </div>
		</div>
	</div>
</section>

@endsection