@extends('layouts.app')

@section('guest-content')

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

@endsection