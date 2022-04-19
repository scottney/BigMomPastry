@extends('layouts.app')

@section('guest-content')

<section id="about-us-area">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 aboutUsMainImage">
			<div class="aboutUsSpecialContainer darkShade">
				<h5 class="display-6 text-white text-center mt-5 about-us-header-text">ABOUT US</h5>

				<p class="text-white p-3 aboutUsText" id="aboutUsScrollText">Founded in 2020 in <i>Nairobi, Kenya,</i><b><i>BigMomPastry</i></b> is a pastry and confectionery bakery and outlet built upon a foundation of creative and passion honoured methods. Our desire is to give you an experience you've never had with <strong><i>pastry</i></strong> and <strong><i>confectionery</i></strong>.</p>

				<p class="text-white aboutUsText" id="aboutUsScrollText">We started out with just 3 flavours and 6 types of cakes  i.e:</p>
					<table class="table table-striped table-bordered table-hover text-white rightReveal bg-flavours startFlavours">
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

					<p class="text-white p-3 pb-5 aboutUsText" id="aboutUsScrollText">Over <i>time</i> we have expanded our <i>flavours</i> and <i>products</i> <b>inventory</b> to accommodate more pastry and confectionery.</p>
			</div>
		</div>
	</div>

	<div class="row pt-5 pb-5">
		<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
			<!-- Content to Margin Separator -->
		</div>

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

		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
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

			<i class="fa-solid fa-circle-arrow-down fa-1x p-3" id="aboutUsScrollTextLink"><a href="#" class="text-white p-1" id="aboutUsLinkText">SCROLL TO BEGIN WALK THROUGH</a></i>
		</div>

		<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
			<!-- Content to Margin Separator -->
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
			<i class="fa-solid fa-hands-holding fa-1x bottomReveal p-3" id="aboutUsScrollTextLink"><a href="{{route('sustainability')}}" class=" p-1" id="aboutUsLinkText">SUSTAINABILITY AT BIGMOMPASTRY</a></i><br>

			<i class="fa-solid fa-circle-chevron-right fa-1x bottomReveal p-3" id="aboutUsScrollTextLink"><a href="" class=" p-1" id="aboutUsLinkText">LEARN MORE</a></i>
		</div>
	</div>

	<div class="row pt-3">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-6 text-center text-white companyTitleText">Company Statements</h5>

			<div class="swiper-container pt-3 pb-3">
				<div class="swiper-wrapper">
					<div class="swiper-slide aboutUs-swiper-slide" id="aboutUsPageSlide2">
						<div class="aboutUs-sliding-cards-black-shade">
							<h5 class="display-6 pt-3 text-white text-center statementsHeaderText" id=""><b>Mission</b></h5>
							<p class="text-white p-1 textIndent" id="">The power and impact of good pastry and confectionery shared inspires all of us at <b>BigMomPastry</b> to innovate and create the finest, most fresh, affordable products. We nurture the idea that our products are universally enjoyed by <i>families</i> and <i>friends</i>, making us part of life's celebrations and memories.</p>
							<p class="text-white p-1 textIndent" id="">So we strive in delivering fresh, well baked, clean and healthy <i>pastry</i> and <i>confectionery</i> to all our customers and clients. With a team of fully talented individuals, committed to providing superior quality products at a cost effective price in an environment that is perfectly clean, safe and friendly to both the employees and the customers. Our goal is to provide every customer and client with an un-matched product experience. Other than that we strive to provide our employees with a favourable working environment because our employees are not just workers but, are also part of the <b>BigMomPastry</b> family.</p>
							<p class="text-white p-1 textIndent" id="">With <b>passion</b> and <b>committment</b> as our arrow head in traversing the hospitality industry, we are taking strides in making it easier for customers and clients to order custom made <i>pastry</i> and <i>confectionery</i>. We want you to decide whatever you want, and however you want it i.e. you can choose to pick it up at our sales office or have it delivered straight to your doorstep from the cormfort of your home. Either way, <b>customer satisfaction</b> is our biggest priority.</p>
						</div>
					</div>

					<div class="swiper-slide aboutUs-swiper-slide" id="aboutUsPageSlide3">
						<div class="aboutUs-sliding-cards-black-shade">
							<h5 class="display-6 pt-3 text-white text-center statementsHeaderText" id=""><b>Vision</b></h5>
							<p class="text-white p-1 textIndent" id="">As a bakery, we are here to collaborate with customers and clients in creating custom, unique, fashionable, affordable, fresh and healthy <i>pastry</i> and <i>confectionery</i>. We are also here to make it possible for anyone to be able to access our products and services from anywhere. We <b><i>envision</i></b> our clients and customers being able to <i>imagine</i> the type of pastry that they want, and connecting with us to have us <b>bake</b>, <b>design</b> and <b>deliver</b> the product to them. Other than the above stated, we foresee a future where we will have an extremely friendly environment for workers. A work environment that will attract workers from across the globe to want to be part of the <b>BigMomPastry</b> family.</p>
							<p class="text-white p-1 textIndent" id="">We also want to create opportunities for all learners to acquire knowledge, skills and competences for employment in the baking and hospitality industry in not only <b>Nairobi</b>, <b>Kenya</b> but also across <b>Africa</b> and the <b>globe</b>. We foresee ourselves being the pivotal factor across the population in creating not only jobs, employemnt and financial security but also impacting the community and society with sustainable skills. We envision uplifting communities and societies across the region and globe to create economic growth within these communities and populations. We envision being on the fore-front of eradicating poverty.</p>
							<p class="text-white p-1 textIndent" id="">Finally, other than the above stated, we foresee ourselves being seen as the proud and undisputable leader in the bakery and hospitality industry in not only selected segments of the city, country, region, continent but also across the globe. This will become possible by raising the bar on innovation, operational excellence and embracing sustainability with all shareholders.</p>
						</div>
					</div>

					<div class="swiper-slide aboutUs-swiper-slide" id="aboutUsPageSlide1">
						<div class="aboutUs-sliding-cards-black-shade">
							<h5 class="display-6 pt-3 text-white text-center statementsHeaderText" id=""><b>Core Values</b></h5>
							<p class="text-white p-1 textIndent" id=""><b><i>Accountability:</i></b> We accept and acknowledge responsibility for actions, products, decisions, time and policies. We also take pride in our achievements and heed our mistakes.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Adaptability:</i></b> We build new partnerships while at the same time retain long-term partnerships by continously evaluating and re-evaluating our products and talent to meet changing market demands.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Boldness:</i></b> We display boldness throughout and have a strong will to win in every aspect of our business and within the hospitality industry itself.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Commitment:</i></b> We are bound to providing opportunities for our staff/employees, customers/clients and the community to grow and reach their full potential because their success will determine ours. We will avail all those opportunities while consistently providing products of exceptional quality and outstanding customer service experience.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Community:</i></b> We support our community by donating our time and connecting with others. We also tend to celebrate the differences and acknowledge the needs of the populations within communities.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Craftsmanship:</i></b> We revere products, hone our skills and honour traditions.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Communication:</i></b> We positively speak to our employees/workers and customers/clients. We speak with good purpose using empowering and positive conversations. We acknowledge what is being said and take responsibility for responses to the communication.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Consistency:</i></b> We are consistent in our actions so that our customers and employees can feel comfortable in dealing with us as <b>The BigMomPastry Family</b>. We are disciplined in our work so that our results, growth and success are consistent.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Excellence:</i></b> We don't just settle for good enough. We strive to deliver products of exceptional quality. We stay on the path of constant never-ending improvement and innovation.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Empowerment:</i></b> We have full trust and confidence in our associates to make sound business decisions and we accept the need for taking prudent levels of risk.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Education:</i></b> We learn from our mistakes, consistently mastering and growing so that we can help all our stakeholders master and grow too.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Gratitude:</i></b> As a business we are truly grateful to all our customers/clients. We celebrate our wins and our employees. By taking care of our employees, they make sure that all our customers/clients are taken good care of.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Integrity:</i></b> We always speak the truth and do what is right. We bake quality products, respect one another and deliver on what we promise.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Improvements:</i></b> We are constantly innovating new products and improving on the already existing products in pursuit of excellence.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Ownership:</i></b> We are responsible for our actions and own everything that takes place within the work environment. We are accountable for our results and we know that for things to change, we first need to change.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Passion:</i></b> We love all our products and serving people. We find full satisfaction in putting a smile on peoples' faces and brightening peoples' lives.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Respect:</i></b> We conduct ourselves in a manner that values the customers/clients and employees needs both internally and externally.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Success:</i></b> We totally focus on our goals, objectives and attention on the successful outcome of whatever we are doing. We are willing to win and allow others to win. At all times, we display our competence and confidence.</p>
							<p class="text-white p-1 textIndent" id=""><b><i>Safety:</i></b> We ensure the health and well-being of all customers/clients and employees. We create a safe work environment through <b>ACT</b>: i.e <i>Awareness, Communication and Training</i></p>
							<p class="text-white p-1 textIndent" id=""><b><i>Teamwork:</i></b> We coperate and cordinate efficiently and effectively among our clients/customers, employees and stakeholders. All partners rely on each other, and we put company interests before individual interests to work towards and accomplish the larger objectives of the company. Our success depends on our ability to perform as one successful team.</p>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>

	<div class="row pt-3 darkShade">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h5 class="display-6 text-white text-center our-team-header-text">Our Team</h5>
		</div>
	</div>

	<div class="row pt-3 pb-5 darkShade">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<div class="carousel slide carousel-fade" id="outTeam" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row pt-3 pb-5">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card aboutUsPageCards leftAdjust rightReveal">
									<div class="card-header">
										<div class="card-title"></div>
									</div>

									<div class="card-body">
										<img src="/images/profile/ourTeam/scott.jpg" class="teamImage">

										<p class="text-white text-center"><q>At BigMomPastry we believe that we are more than just a business positively impacting the community. We are proud to spear head efforts in creating change and innovation within the community. We are proud of how far we have come, because of our clients, shareholders and employees, and how far we are going. We are BigMomPastry.</q></p>
										<p class="text-white text-center"><b>Managing Director</b></p>
										<p class="text-white text-center"><i>Sir.Scotney Mamai</i></p>
									</div>

									<div class="card-footer"></div>
								</div>
							</div>

							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card aboutUsPageCards leftAdjust rightReveal">
									<div class="card-header">
										<div class="card-title"></div>
									</div>

									<div class="card-body">
										<img src="/images/profile/ourTeam/default.jpg" class="teamImage">

										<p class="text-white text-center"><q>I believe that what we are doing here will impact not only the current generation but also generations to come. It's more than just making a difference within the local community. It's impacting the nation, the region, the continent and the world as a whole. Every little action from us counts towards that. Towards a unique dream. Towards a specific vision for humanity.</q></p>
										<p class="text-white text-center"><b>Operations Manager</b></p>
										<p class="text-white text-center"><i>Dr.Sylvester Johnson</i></p>
									</div>

									<div class="card-footer"></div>
								</div>
							</div>

							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card aboutUsPageCards leftAdjust rightReveal">
									<div class="card-header">
										<div class="card-title"></div>
									</div>

									<div class="card-body">
										<img src="/images/profile/ourTeam/default.jpg" class="teamImage">

										<p class="text-white text-center"><q>It's all in the creativity. If we create basic or plain products, we will not be any different from other bakeries within the same market space/niche. Our target is to give our clients and customers an experience they will never forget. We don't want you to just enjoy good pastry and confectionery, we want you to encounter it, to experience it, to allow it touch the depths of your soul. That's a lifetime's experience from us to you.</q></p>
										<p class="text-white text-center"><b>Chief Baker</b></p>
										<p class="text-white text-center"><i>Mr.Leon Kanyotu</i></p>
									</div>

									<div class="card-footer"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<div class="row pt-3 pb-5">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card aboutUsPageCards leftAdjust rightReveal">
									<div class="card-header">
										<div class="card-title"></div>
									</div>

									<div class="card-body">
										<img src="/images/profile/ourTeam/eve.jpg" class="teamImage">

										<p class="text-white text-center"><q>You need to believe that it takes more than just faith to make the world a better place. So, we continously take actions to make peoples' lives better. We'll never grow weary nor tire in delivering on what we have set out to do as a people and as the BigMomPastry community.</q></p>
										<p class="text-white text-center"><b>Communications, Marketing and Public Relations</b></p>
										<p class="text-white text-center"><i>Miss.Evelyn Kamau</i></p>
									</div>

									<div class="card-footer"></div>
								</div>
							</div>

							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card aboutUsPageCards leftAdjust rightReveal">
									<div class="card-header">
										<div class="card-title"></div>
									</div>

									<div class="card-body">
										<img src="/images/profile/ourTeam/default.jpg" class="teamImage">

										<p class="text-white text-center"><q>Our main objective is to eradicate poverty within the community, country, region and continent. Africa has a great workforce and an unmatched potential globally. Our role as BigMomPastry is to provide an avenue through which people can earn a living and sustain themselves through legal means. Hence, giving everyone an opportunity towards a better life for them and their future generations.</q></p>
										<p class="text-white text-center"><b>Human Resources</b></p>
										<p class="text-white text-center"><i>Miss.Cynthia Anyango</i></p>
									</div>

									<div class="card-footer"></div>
								</div>
							</div>

							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card aboutUsPageCards leftAdjust rightReveal">
									<div class="card-header">
										<div class="card-title"></div>
									</div>

									<div class="card-body">
										<img src="/images/profile/ourTeam/default.jpg" class="teamImage">

										<p class="text-white text-center"><q>We are 100% percent committed to doing what we do because we love creating an impact within the community. We are focussed in not only making profits as a business but also empowering people to position themselves to having a better life. This is strategic to archieving the businesses objectives and goals. It's also important in achieving the vision of poverty eradication and individual empowerment.</q></p>
										<p class="text-white text-center"><b>Member of Board of Directors</b></p>
										<p class="text-white text-center"><i>Mr.Ronald Mussau</i></p>
									</div>

									<div class="card-footer"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<div class="row pt-3 pb-5">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card aboutUsPageCards leftAdjust rightReveal">
									<div class="card-header">
										<div class="card-title"></div>
									</div>

									<div class="card-body">
										<img src="/images/profile/ourTeam/default.jpg" class="teamImage">

										<p class="text-white text-center"><q>We don't want to have a system that mimics other E-Commerce platforms. We want to have something completely unique. Something that's been spunned out of creative and innovative minds. Something that allows people to feel completely different while interacting with it. That's still the same approach we have with our products. We don't want to sell pastry and confectionery like every other bakery. We want to sell fresh and healthy pastry and confectionery. We want to sell products that will have our clients and customers coming back for more not just once, but every time.</q></p>
										<p class="text-white text-center"><b>Chief Technology Officer (C.T.O)</b></p>
										<p class="text-white text-center"><i>Miss.Nicole Wambui</i></p>
									</div>

									<div class="card-footer"></div>
								</div>
							</div>

							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card aboutUsPageCards leftAdjust rightReveal">
									<div class="card-header">
										<div class="card-title"></div>
									</div>

									<div class="card-body">
										<img src="/images/profile/ourTeam/default.jpg" class="teamImage">

										<p class="text-white text-center"><q>Money is the biggest equalizer within business. As we strive to carry on with our day to day activities, we make sure that our expenses don't overrun our income. We strive to make sure our income is more than enough to not only keep the business running but also cater for staff and other finances. Other than that, we strive to set aside enough capital to sustain on-going projects within the community. By improving business operations efficiency, we increase both productivity and effectiveness. Thus setting ourselves up in a better position presently.</q></p>
										<p class="text-white text-center"><b>Chief Financial Officer (C.F.O)</b></p>
										<p class="text-white text-center"><i>Miss.Angela Maimuna </i></p>
									</div>

									<div class="card-footer"></div>
								</div>
							</div>

							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card aboutUsPageCards leftAdjust rightReveal">
									<div class="card-header">
										<div class="card-title"></div>
									</div>

									<div class="card-body">
										<img src="/images/profile/ourTeam/default.jpg" class="teamImage">

										<p class="text-white text-center"><q>We want to expand our area of influence within the hospitality industry to the region, continent and the world. We want to change people's lives across all nationalities. Other than that we want to be take part in eradicating poverty across all regions. This will not only leave a mark upon people's hearts but also upon generations to come. Our goals and objectives are completely aligned to our vision and with continous efforts being made to get there, we will eventually reach our destination and turn our vision into reality.</q></p>
										<p class="text-white text-center"><b>Member of Board of Directors</b></p>
										<p class="text-white text-center"><i>Mrs.Joanne Kimani</i></p>
									</div>

									<div class="card-footer"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection