@extends('layouts.app')

@section('guest-content')

<section id="about-us-area">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 aboutUsMainImage">
			<div class="aboutUsSpecialContainer darkShade">
				<h5 class="display-6 text-white text-center mt-5 about-us-header-text">ABOUT US</h5>

				<p class="text-white aboutUsText" id="aboutUsScrollText">Founded in 2020 in <i>Nairobi, Kenya,</i><b><i>BigMomPastry</i></b> is a pastry and confectionery bakery and outlet built upon a foundation of creative and passion honoured methods. Our desire is to give you an experience you've never had with <strong><i>pastry</i></strong> and <strong><i>confectionery</i></strong>.</p>

				<p class="text-white aboutUsText" id="aboutUsScrollText">We started out with just 3 flavours and 6 types of cakes  i.e:</p>
					<table class="table table-striped table-bordered table-hover text-white reveal bg-flavours startFlavours">
						<thead>
							<tr>
								<th scope="col"><b><i>No.</i></b></th>
								<th scope="col"><b><i>Flavours</i></b></th>
								<th scope="col"><b><i>Types</i></b></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="text-white" scope="row">1</th>
								<td class="text-white">Vanilla</td>
								<td class="text-white">Vanilla Cake</td>
							</tr>
							<tr>
								<th class="text-white" scope="row">2</th>
								<td class="text-white">Chocolate</td>
								<td class="text-white">Chocolate Cake</td>
							</tr>
							<tr>
								<th class="text-white" scope="row">3</th>
								<td class="text-white">Strawberry</td>
								<td class="text-white">Strawberry Cake</td>
							</tr>
							<tr>
								<th class="text-white" scope="row">4</th>
								<td class="text-white"></td>
								<td class="text-white">BlackForest Cake</td>
							</tr>
							<tr>
								<th class="text-white" scope="row">5</th>
								<td class="text-white"></td>
								<td class="text-white">WhiteForest Cake</td>
							</tr>
							<tr>
								<th class="text-white" scope="row">6</th>
								<td class="text-white"></td>
								<td class="text-white">RedVelvet Cake</td>
							</tr>
						</tbody>
					</table>

				<i class="fa-solid fa-circle-arrow-down fa-1x p-3" id="aboutUsScrollTextLink"><a href="#" class="text-white p-1" id="aboutUsLinkText">SCROLL TO BEGIN WALK THROUGH</a></i><br>
			</div>
		</div>
	</div>

	<div class="row pt-5 pb-5">
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

@endsection