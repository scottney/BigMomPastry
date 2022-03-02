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
	<div class="row pt-5 pb-5" id="area-logo">
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
				<h5 class="display-5 text-white text-center logo-area-text">Live the sweet life...</h5>
			</div>
		</div>
	</div>
</section>

<section id="products-area">
	<div class="row" id="area-products">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<h5 class="display-5 text-white text-center p3-5 products-header-text">PRODUCTS</h5>
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
					<h5 class="display-5 text-white text-center pt-3 blog-header-text">BLOG</h5>
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
					<h5 class="display-5 text-white text-center pt-3 operations-header-text">OPERATIONS</h5>
				</div>
			</div>

			<div class="row pb-5">
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
	                <div class=""><i class="fa fa-clock fa-3x text-white"></i></div>
	                <p class="text-white counter" style="font-size: 30px;">250</p>
	                <p class="text-white" style="font-size: 24px;"><b>Working Hours</b></p>
	            </div>

	            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	                <div class=""><i class="fas fa-shopping-bag fa-3x text-white"></i></div>
	                <p class="text-white counter" style="font-size: 30px;">1000</p>
	                <p class="text-white" style="font-size: 24px;"><b>Orders</b></p>
	            </div>

	            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	                <div class=""><i class="fas fa-shipping-fast fa-3x text-white"></i></div>
	                <p class="text-white counter" style="font-size: 30px;">3000</p>
	                <p class="text-white" style="font-size: 24px;"><b>Delivered Pieces</b></p>
	            </div>

	            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5" id="sales-counter-shadow">
	                <div class=""><i class="fas fa-store-alt fa-3x text-white"></i></div>
	                <p class="text-white counter" style="font-size: 30px;">10</p>
	                <p class="text-white" style="font-size: 24px;"><b>Outlets</b></p>
	            </div>
	        </div>
		</div>
	</div>
</section>

<section id="about-us-area">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-5 text-white text-center pt-3 about-us-header-text">ABOUT US</h5>
		</div>
	</div>

	<div class="row pb-3">
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
			<h5 class="wordCarousel">
				<div>
					<ul class="flip4">
						<li class="text-white"><i>Passion for pastry and confectionery</i></li>
						<li class="text-white"><i>Baked with love</i></li>
						<li class="text-white"><i>Quality at heart</i></li>
						<li class="text-white"><i>The BigMomPastry Story</i></li>
					</ul>
				</div>
			</h5>
		</div>

		<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
			<p class="text-white aboutUsText" id="aboutUsScrollText"><b><i>BigMomPastry</i></b> is a pastry and confectionery bakery, distributor and outlet built upon a foundation of creative and passion honoured methods. Our desire is to give you an experience you've never had with <strong><i>pastry</i></strong> and <strong><i>confectionery</i></strong></p>

			<i class="fa-solid fa-circle-arrow-down fa-1x p-3" id="aboutUsScrollTextLink"><a href="" class="text-white p-1" id="aboutUsLinkText">SCROLL TO BEGIN WALK THROUGH</a></i><br>
		</div>

		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
			<div class="carousel slide carousel-fade leftReveal" id="aboutUsImagesFade" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="aboutUsImage" id="" src="{{url('/images/confectionery.jpg')}}" alt="confectionery">
					</div>

					<div class="carousel-item">
						<img class="aboutUsImage" id="" src="{{url('/images/pastry-and-confectionery.webp')}}" alt="pastry and confectionery">
					</div>

					<div class="carousel-item">
						<img class="aboutUsImage" id="" src="{{url('/images/confectionery-1.jpeg')}}" alt="sweet confectionery">
					</div>

					<div class="carousel-item">
						<img class="aboutUsImage" id="" src="{{url('/images/confectionery-3.jpg')}}" alt="pastry">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row p-3 shade">
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
			<i class="fa-solid fa-hand-holding-heart fa-1x bottomReveal p-3" id="aboutUsScrollTextLink"><a href="{{route('ourValues')}}" class=" p-1" id="aboutUsLinkText" target="_blank">OUR VALUES</a></i><br>

			<i class="fa-solid fa-basket-shopping fa-1x bottomReveal p-3" id="aboutUsScrollTextLink"><a href="" class=" p-1" id="aboutUsLinkText">FIND A BIGMOMPASTRY OUTLET</a></i>
		</div>

		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
			<i class="fa-solid fa-book-open fa-1x bottomReveal p-3" id="aboutUsScrollTextLink"><a href="{{route('MasterclassIndex')}}" class=" p-1" id="aboutUsLinkText">BOOK A MASTERCLASS</a></i><br>

			<i class="fa-solid fa-shop fa-1x bottomReveal p-3" id="aboutUsScrollTextLink"><a href="" class=" p-1" id="aboutUsLinkText">BIGMOMPASTRY KENYA</a></i>
		</div>

		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
			<i class="fa-solid fa-hands-holding fa-1x bottomReveal p-3" id="aboutUsScrollTextLink"><a href="" class=" p-1" id="aboutUsLinkText">SUSTAINABILITY AT BIGMOMPASTRY</a></i><br>

			<i class="fa-solid fa-circle-chevron-right fa-1x bottomReveal p-3" id="aboutUsScrollTextLink"><a href="" class=" p-1" id="aboutUsLinkText">LEARN MORE</a></i>
		</div>
	</div>
</section>

<section id="contacts-area">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-5 text-white text-center pt-3 contacts-header-text">CONTACTS</h5>
		</div>
	</div>

	<div class="row shade pt-5">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-5 text-white contactsText">Get in touch with us through our social platforms.</h5>
		</div>
	</div>

	<div class="row shade pt-3">
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center">
			<i class="fa-brands fa-facebook fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://www.facebook.com/BigMomPastry" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Facebook</a></i><br>
			<i class="fa-brands fa-instagram fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://www.instagram.com/big_mom_pastry" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Instagram</a></i><br>
			<i class="fa-brands fa-snapchat fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://www.snapchat.com/bigmompastry" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Snapchat</a></i><br>
			<i class="fa-brands fa-twitter fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://www.twitter.com/MomPastries" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Twitter</a></i>
		</div>

		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center">
			<i class="fa-solid fa-at fa-2x p-3 bottomReveal" id="contactsIcons"><a href="mailto:bigmompastries@gmail.com" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">BigMomPastry</a></i><br>
			<i class="fa-solid fa-square-phone fa-2x p-3 bottomReveal" id="contactsIcons"><a href="tel:+254708621963" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Phone Number</a></i><br>
			<i class="fa-brands fa-whatsapp fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://api.whatsapp.com/send?phone=254708621963" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Whatsapp</a></i><br>
			<i class="fa-brands fa-linkedin fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://www.linkedin.com/in/bigmom-pastries-670809231" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">LinkedIn</a></i>
		</div>

		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center">
			<i class="fa-brands fa-pinterest fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://www.pinterest.com/bigmompastries" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Pinterest</a></i><br>
			<i class="fa-brands fa-telegram fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://telegram.me/BigMomPastry" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Telegram</a></i><br>
			<i class="fa-brands fa-youtube fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://www.youtube.com/channel/UCizF1zni3MJdD7P1IoewAqg" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Youtube</a></i><br>
			<i class="fa-brands fa-tiktok fa-2x p-3 bottomReveal" id="contactsIcons"><a href="https://www.tiktok.com/@bigmompastry" class="contacts-text topReveal" id="contactsIconsLinks" target="_blank">Tiktok</a></i>
		</div>
	</div>

	<div class="row pt-3">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-5 text-white working-hours-text reveal">Working Hours</h5>

			<table class="table table-dark table-striped table-hover reveal">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Day of Week</th>
						<th scope="col">Opening Hours (12HRS/24HRS)</th>
						<th scope="col">Closing Hours (12HRS/24HRS)</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Sunday</td>
						<td>9:00 A.M / 0900 Hrs</td>
						<td>12:00 P.M / 1200 Hrs</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>Monday - Friday</td>
						<td>7:00 A.M / 0700 Hrs</td>
						<td>7:00 P.M / 1900 Hrs</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Saturday</td>
						<td>7:00 A.M / 0700 Hrs</td>
						<td>7:00 P.M / 1900 Hrs</td>
					</tr>

					<tr>
						<th scope="row">4</th>
						<td>Public Holidays</td>
						<td>9:00 A.M / 0900 Hrs</td>
						<td>12:00 P.M / 1200 Hrs</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row shade pt-3">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-5 text-white location-text reveal">Location</h5>
		</div>
	</div>

	<div class="row shade pt-3">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-5 text-white visitText reveal">Visit us at:</h5>
		</div>
	</div>

	<div class="row shade pt-3 pb-5">
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
			<div class="card shadow text-white bg-secondary rightReveal locationCard">
				<div class="card-header">
					<div class="card-title">
						<h5 class="display-5 text-white text-center locationCardText">Bakery</h5>
					</div>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
							<span class="d-flex justify-content-center"><i class="fa-solid fa-shop fa-2x locationIcon"></i></span>
						</div>

						<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
							<span class="locationCardBodyText"><i>4489-00232,</i></span><br>
							<span class="locationCardBodyText"><i>Ruiru,Acacia-Street</i></span>
						</div>
					</div>
				</div>

				<div class="card-footer"></div>
			</div>
		</div>

		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
			<div class="card shadow text-white bg-secondary bottomReveal locationCard">
				<div class="card-header">
					<div class="card-title">
						<h5 class="display-5 text-white text-center locationCardText">Main Office</h5>
					</div>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
							<span class="d-flex justify-content-center"><i class="fa-solid fa-building fa-2x locationIcon"></i></span>
						</div>

						<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
							<span class="locationCardBodyText"><i>4489-00232,</i></span><br>
							<span class="locationCardBodyText"><i>Ruiru,Acacia-Street</i></span>
						</div>
					</div>
				</div>

				<div class="card-footer"></div>
			</div>
		</div>

		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
			<div class="card shadow text-white bg-secondary leftReveal locationCard">
				<div class="card-header">
					<div class="card-title">
						<h5 class="display-5 text-white text-center locationCardText">Our Outlets</h5>
					</div>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
							<span class="d-flex justify-content-center"><i class="fa-solid fa-store fa-2x locationIcon"></i></span>
						</div>

						<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
							<span class="locationCardBodyText"><i>Nairobi</i></span>
						</div>
					</div>
				</div>

				<div class="card-footer"></div>
			</div>
		</div>
	</div>

</section>

@endsection




