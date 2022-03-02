@extends('layouts.app')

@section('guest-content')

<section id="masterclass-area">
    @if(Session::has('book-masterclass-successfull'))
        <div class="alert alert-success"><i class="fa-solid fa-circle-check"></i>{{Session::get('book-masterclass-successfull')}}</div>
    @elseif(Session::has('book-masterclass-failed'))
        <div class="alert alert-danger"><i class="fa-solid fa-circle-xmark"></i>{{Session::get('book-masterclass-failed')}}</div>
    @endif
	<div class="row pt-3 masterClassTopContent">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <h5 class="text-white text-center masterClassHeaderText">Book A Masterclass</h5>

            <p class="text-white masterClassHeaderInfoText">Our <b>masterclass</b> has been <i>designed</i> and <i>tested</i> over time to achieve <b><i>perfection</i></b> for our trainess. Our staff have been practicing within the work environment, everything that they teach to the apprentice's. These skills, have been validated by the <b>market</b> as fit, because of the markets' response to our products.</p>

            <p class="text-white masterClassHeaderInfoText"><b>N.B.</b> To <i>book</i> a <b><i>masterclass</i></b>, please fill in your details in the form from the link below.</p>

            <i class="fa-solid fa-book-open-reader fa-3x bookMasterClassLinkIcon"></i><a href="#" class="bookMasterClassLink" data-bs-toggle="modal" data-bs-target="#bookMasterClassModalForm" onclick="bookMasterclassModalForm()">Book a Masterclass</a>
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

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="modal fade" id="bookMasterClassModalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labbelledby="bookMasterClassModalFormLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <i class="fa-solid fa-book fa-2x bookMasterClassLinkIcon"></i>
                            <h5 class="modal-title text-white p-3 styled-text" id="bookMasterClassModalFormLabel">BOOK MASTERCLASS</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="first-name" class="form-check-label bookMasterclassFormText"><b><i>{{ __('First Name') }}:</i></b></label>

                                        <input type="text" name="first_name" class="@error('first_name') is-invalid @enderror" id="inputFirstName" placeholder="First Name..." minlength="1" maxlength="19" autocomplete="first_name" autofocus>

                                        @error('first_name')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="surname" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Surname') }}:</i></b></label>

                                        <input type="text" name="surname" class="@error('surname') is-invalid @enderror" id="inputSurname" placeholder="Surame..." minlength="1" maxlength="19" autocomplete="surname" autofocus>

                                        @error('surname')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="middle-name" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Middle Name') }}:</i></b></label>

                                        <input type="text" name="middle_name" class="@error('middle_name') is-invalid @enderror" id="inputMiddleName" placeholder="Middle Name..." minlength="1" maxlength="19" autocomplete="middle_name" autofocus>

                                        @error('middle_name')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="IdNumber" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Id Number') }}:</i></b></label>

                                        <input type="number" name="id_number" class="@error('id_number') is-invalid @enderror" id="inputIdNumber" placeholder="Id Number..." minlength="8" maxlength="8" autofocus>

                                        @error('id_number')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="date-of-birth" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Date of Birth') }}:</i></b></label>

                                        <input type="date" name="date_of_birth" class="@error('date_of_birth') is-invalid @enderror" id="inputDateOfBirth" placeholder="Date of Birth..." oninput="ageCalc()" autofocus>

                                        @error('date_of_birth')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="age" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Age') }}:</i></b></label>

                                        <input type="number" name="age" class="@error('age') is-invalid @enderror" id="inputAge" placeholder="Age..." minlength="1" maxlength="2" autofocus readonly>

                                        @error('age')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="phone-number" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Phone Number') }}:</i></b></label>

                                        <input type="tel" name="phone_number" class="@error('phone_number') is-invalid @enderror" id="inputPhoneNumber" placeholder="Phone Number..." autofocus>

                                        @error('phone_number')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="e-mail" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Email') }}:</i></b></label>

                                        <input type="email" name="email" class="@error('email') is-invalid @enderror" id="inputEmail" placeholder="Email..." minlength="3" maxlength="49" autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="place-of-residence" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Place of Residence') }}:</i></b></label>

                                        <input type="text" name="place_of_residence" class="@error('place_of_residence') is-invalid @enderror" id="inputPlaceOfResidence" placeholder="Place of Residence..." autocomplete="place_of_residence" minlength="3" maxlength="49" autofocus>

                                        @error('place_of_residence')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="apprentice-id" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Apprentice Id') }}:</i></b></label>

                                        <input type="number" name="apprentice_id" class="@error('apprentice_id') is-invalid @enderror" id="inputApprenticeId" placeholder="Apprentice Id..." title="Auto generates after choosing/selecting an apprentice session" minlength="3" maxlength="1000000001" autofocus readonly>

                                        @error('apprentice_id')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="apprentice-session" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Apprentice Session') }}:</i></b></label>

                                        <select name="apprentice_session" class="form-select" id="inputApprenticeSession" oninput="ApprenticeID()" autofocus>
                                            <option class="form-control" value="">-------</option>
                                            <option class="form-control" value="January-March">January-March</option>
                                            <option class="form-control" value="May-July">May-July</option>
                                            <option class="form-control" value="September-November">September-November</option>
                                        </select>

                                        @error('apprentice_session')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="product-course" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Product Course') }}:</i></b></label>

                                        <select name="product_course" class="form-select" id="inputProductCourse" oninput="productCourseAmount()" autofocus>
                                            <option class="form-control" value="">-------</option>
                                            <option class="form-control" value="Pastry">Pastry</option>
                                            <option class="form-control" value="Bread">Bread</option>
                                            <option class="form-control" value="Decoration">Decoration</option>
                                        </select>

                                        @error('product_course')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="payment-mode" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Payment Mode') }}:</i></b></label>

                                        <select name="payment_mode" class="form-select" id="inputPaymentMode" autofocus>
                                            <option class="form-control" value="">-------</option>
                                            <option class="form-control" value="Cash">Cash</option>
                                            <option class="form-control" value="Bank">Bank</option>
                                            <option class="form-control" value="M-Pesa Paybill">M-Pesa Paybill</option>
                                        </select>

                                        @error('payment_mode')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="amount" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Amount') }}:</i></b></label>

                                        <input type="number" name="amount" class="@error('amount') is-invalid @enderror" id="inputAmount" placeholder="Amount..." autofocus readonly>

                                        @error('amount')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <button type="reset" class="btn btn-danger float-start resetButton">Reset</button>
                                        <button type="submit" class="btn btn-primary float-end submitButton">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <h5 class="text-white text-center float-start masterClassBodyText">Our apprentice program is designed to impact everyone.</h5>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-white text-center masterClassCardHeaderText">AboutUs Section</h5>
                    </div>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <i class="fa-solid fa-globe text-white fa-5x"></i>

                    <p class="text-white masterClassCardBodyText">The journey to giving you an extra ordinary experience with <b><i>pastry</i></b> and <b><i>confectionery</i></b> began years back with nothing but a dream and a vision. Now, being in a position to deliver on both the dream and vision, we are assisting our clients and customers touch base with 'best experiences to <b><i>pastry</i></b> and <b><i>confectionery</i></b>'.</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a class="masterClassCardFooterText" href="{{route('index')}}#about-us-area"><i class="fa-solid fa-circle-right fa-1x masterClassCardsIcons" id=""></i>{{ __('Go to AboutUs Section') }}</a>
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
                    <a class="masterClassCardFooterText" href="#"><i class="fa-solid fa-circle-right fa-1x masterClassCardsIcons" id=""></i>{{ __('Go to Sustainability At BigMomPastry') }}</a>
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