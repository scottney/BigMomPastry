@extends('layouts.app')

@section('guest-content')

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