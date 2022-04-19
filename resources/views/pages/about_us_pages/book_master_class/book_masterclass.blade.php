@extends('layouts.app')

@section('guest-content')

<section id="bookMasterclassForm-area">
	<div class="row pt-3 masterClassTopContent">
        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
		<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<div class="card shadow bg-dark ">
						<div class="card-header">
							<div class="card-title">
								<h5 class="text-white text-center masterClassHeaderText">BOOK MASTERCLASS</h5>
							</div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                     @if(Session::has('book-masterclass-failed'))
                                     <div class="alert alert-danger alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><i class="fa-solid fa-circle-xmark"></i>{{Session::get('book-masterclass-failed')}}
                                     </div>
                                     @endif
                                </div>
                            </div>
						</div>
						<div class="card-body">
							<form action="{{route('Masterclass')}}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                                @csrf
                                <fieldset class="border border-white rounded p-3">
                                    <legend  class="float-none w-auto p-1"><h5 class="display-6 text-white masterClassStepHeaderText">Step 1</h5></legend>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="first-name" class="form-check-label bookMasterclassFormText"><b><i>{{ __('First Name') }}:</i></b></label>

                                            <input type="text" name="first_name" class="@error('first_name') is-invalid @enderror" id="inputFirstName" placeholder="First Name..." minlength="1" maxlength="19" autocomplete="first_name" autofocus>

                                            @error('first_name')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="surname" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Surname') }}:</i></b></label>

                                            <input type="text" name="surname" class="@error('surname') is-invalid @enderror" id="inputSurname" placeholder="Surame..." minlength="1" maxlength="19" autocomplete="surname" autofocus>

                                            @error('surname')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="middle-name" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Middle Name') }}:</i></b></label>

                                            <input type="text" name="middle_name" class="@error('middle_name') is-invalid @enderror" id="inputMiddleName" placeholder="Middle Name..." minlength="1" maxlength="19" autocomplete="middle_name" autofocus>

                                            @error('middle_name')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row pt-4">
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="IdNumber" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Id Number') }}:</i></b></label>

                                            <input type="number" name="id_number" class="@error('id_number') is-invalid @enderror" id="inputIdNumber" placeholder="Id Number..." minlength="8" maxlength="8" autofocus>

                                            @error('id_number')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="date-of-birth" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Date of Birth') }}:</i></b></label>

                                            <input type="date" name="date_of_birth" class="@error('date_of_birth') is-invalid @enderror" id="inputDateOfBirth" placeholder="Date of Birth..." oninput="ageCalc()" autofocus>

                                            @error('date_of_birth')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
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
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="phone-number" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Phone Number') }}:</i></b></label>

                                            <input type="tel" name="phone_number" class="@error('phone_number') is-invalid @enderror" id="inputPhoneNumber" placeholder="Phone Number..." autofocus>

                                            @error('phone_number')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="e-mail" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Email') }}:</i></b></label>

                                            <input type="email" name="email" class="@error('email') is-invalid @enderror" id="inputEmail" placeholder="Email..." minlength="3" maxlength="49" autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                         <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="place-of-residence" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Place of Residence') }}:</i></b></label>

                                            <input type="text" name="place_of_residence" class="@error('place_of_residence') is-invalid @enderror" id="inputPlaceOfResidence" placeholder="Place of Residence..." autocomplete="place_of_residence" minlength="3" maxlength="49" autofocus>

                                            @error('place_of_residence')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="border border-white rounded p-3">
                                    <legend  class="float-none w-auto p-1"><h5 class="display-6 text-white masterClassStepHeaderText">Step 2</h5></legend>

                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="apprentice-id" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Apprentice Id') }}:</i></b></label>

                                            <input type="number" name="apprentice_id" class="@error('apprentice_id') is-invalid @enderror" id="inputApprenticeId" placeholder="Apprentice Id..." data-bs-toggle="tooltip" data-bs-placement="top" title="Auto generated after choosing/selecting an apprentice session" minlength="3" maxlength="1000000001" autofocus readonly>

                                            @error('apprentice_id')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="apprentice-session" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Apprentice Session') }}:</i></b></label>

                                            <select name="apprentice_session" class="form-select" id="inputApprenticeSession" data-bs-toggle="tooltip" data-bs-placement="top" title="Filling this field generates the Apprentice Id" oninput="ApprenticeID()" autofocus>
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

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="product-course" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Product Course') }}:</i></b></label>

                                            <select name="product_course" class="form-select" id="inputProductCourse" data-bs-toggle="tooltip" data-bs-placement="top" title="Filling this field generates the Amount required to be paid for the product course desired" oninput="productCourseAmount()" autofocus>
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
                                </fieldset>

                                <fieldset class="border border-white rounded p-3">
                                    <legend  class="float-none w-auto p-1"><h5 class="display-6 text-white masterClassStepHeaderText">Step 3</h5></legend>

                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="payment-mode" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Payment Mode') }}:</i></b></label>

                                            <select name="payment_mode" class="form-select" id="inputPaymentMode" autofocus>
                                                <option class="form-control" value="">-------</option>
                                                <option class="form-control" value="Cash">Cash</option>
                                                <option class="form-control" value="M-Pesa Paybill">M-Pesa Paybill</option>
                                            </select>

                                            @error('payment_mode')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="amount" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Amount') }}:</i></b></label>

                                            <input type="number" name="amount" class="@error('amount') is-invalid @enderror" id="inputAmount" placeholder="Amount..." data-bs-toggle="tooltip" data-bs-placement="top" title="Auto generated after selecting the desired product course" autofocus readonly>

                                            @error('amount')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="field-office-location" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Field Office Location') }}:</i></b></label>

                                            <select name="field_office_location" class="form-select" id="inputFieldOfficeLocation" data-bs-toggle="tooltip" data-bs-placement="top" title="This is the Location of the Office where you made your payments" autofocus>
                                                <option class="form-control" value="">-------</option>
                                                <option class="form-control" value="Ruiru at Kamakis">Ruiru at Kamakis</option>
                                            </select>

                                            @error('field_office_location')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="border border-white rounded p-3">
                                    <legend  class="float-none w-auto p-1"><h5 class="display-6 text-white masterClassStepHeaderText">Step 4</h5></legend>

                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label for="office-attendant" class="form-check-label bookMasterclassFormText"><b><i>{{ __('Office Attendant') }}:</i></b></label>

                                            <input type="text" name="office_attendant" class="@error('office_attendant') is-invalid @enderror" id="inputOfficeAttendant" placeholder="Office Attendant..." data-bs-toggle="tooltip" data-bs-placement="top" title="This is the name of the attendant who was in office while you were booking for a masterclass" minlength="1" maxlength="19" autocomplete="Office Attendant" autofocus>

                                            @error('office_attendant')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>

                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
                                    </div>
                                </fieldset>

                                <div class="row pt-4">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <button type="reset" class="btn btn-danger float-start resetButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Clear all form fields">Reset</button>
                                        <button type="submit" class="btn btn-success float-end submitButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Submit form">Submit</button>
                                        <button type="button" class="btn btn-primary float-end nextButton" id="nextButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Proceed to the next step">Next</button>
                                        <button type="button" class="btn btn-warning float-end prevButton" id="previousButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Return to the previous step">Prev</button>
                                    </div>
                                </div>
                            </form>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
			</div>
		</div>
        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
	</div>

    <div class="row pt-3 pb-5">
        <h5 class="text-white apprenticeHeaderText">Apprentice Product Courses</h5>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title"></div>
                </div>
                <div class="card-body bookMasterCardImage no-padding">
                    <div class="darkShade">
                        <h5 class="text-center apprenticeCardText">Pastry</h5>
                    </div>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title"></div>
                </div>
                <div class="card-body bookMasterCardImage-1 no-padding">
                    <div class="darkShade">
                        <h5 class="text-center apprenticeCardText">Bread</h5>
                    </div>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
            <div class="card bg-dark" id="masterClassCard">
                <div class="card-header">
                    <div class="card-title"></div>
                </div>
                <div class="card-body bookMasterCardImage-2 no-padding">
                    <div class="darkShade">
                        <h5 class="text-center apprenticeCardText">Decoration</h5>
                    </div>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</section>

@endsection