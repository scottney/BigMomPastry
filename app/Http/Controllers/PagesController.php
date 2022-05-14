<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookMasterclass;

class PagesController extends Controller
{
     public function __construct()
    {
        $this->middleware(['guest']);
    }

    //Function responsible for redirecting to the landing page
    protected function index() {
        return view("index");
    }

    //Function responsible for redirecting to the aboutUs page
    protected function aboutUs() {
        return view("pages.about_us_pages.aboutUs");
    }

    //Function responsible for redirecting to the Our Values page
    protected function values() {
        return view("pages.about_us_pages.values");
    }

    //Function responsible for redirecting to the Book Masterclass Index page
    protected function bookMasterclassIndex() {
        return view("pages.about_us_pages.masterclass");
    }

    //Function responsible for redirecting to the Book Masterclass form page
    protected function bookMasterclassForm() {
        return view("pages.about_us_pages.book_master_class.book_masterclass");
    }

    //Function responsible for posting the Book Masterclass form content to the database
    protected function bookMasterclass(Request $request) {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'min:1', 'max:19'],
            'surname' => ['required', 'string', 'min:1', 'max:19'],
            'middle_name' => ['required', 'string', 'min:1', 'max:19'],
            'id_number' => ['required', 'integer'],
            'date_of_birth' => ['required', 'date'],
            'current_date' => ['required', 'date'],
            'current_time' => ['required'],
            'age' => ['required', 'integer'],
            'phone_number' => ['required', 'digits:10'],
            'email' => ['required', 'email'],
            'place_of_residence' => ['required', 'string', 'min:3', 'max:49'],
            'apprentice_id' => ['required', 'integer', 'unique:book_masterclass', 'min:3', 'max:1000000001'],
            'user_id' => ['integer'],
            'apprentice_session' => ['required', 'string'],
            'product_course' => ['required', 'string'],
            'payment_mode' => ['required', 'string'],
            'amount' => ['required', 'integer'],
            'field_office_location' => ['required', 'string'],
            'office_attendant' => ['required', 'string', 'min:1', 'max:19'],
            'receipt_number' => ['required', 'string'],
        ]);

        if ($data) {
            $bookMasterclass = BookMasterclass::create([
                'first_name' => $request->input('first_name'),
                'surname' => $request->input('surname'),
                'middle_name' => $request->input('middle_name'),
                'id_number' => $request->input('id_number'),
                'date_of_birth' => $request->input('date_of_birth'),
                'current_date' => $request->input('current_date'),
                'current_time' => $request->input('current_time'),
                'age' => $request->input('age'),
                'phone_number' => $request->input('phone_number'),
                'email' => $request->input('email'),
                'place_of_residence' => $request->input('place_of_residence'),
                'apprentice_id' => $request->input('apprentice_id'),
                'user_id' => $request->input('user_id'),
                'apprentice_session' => $request->input('apprentice_session'),
                'product_course' => $request->input('product_course'),
                'payment_mode' => $request->input('payment_mode'),
                'amount' => $request->input('amount'),
                'field_office_location' => $request->input('field_office_location'),
                'office_attendant' => $request->input('office_attendant'),
                'receipt_number' => $request->input('receipt_number'),
            ]);

            if ($bookMasterclass) {
                return redirect()->route('MasterclassIndex')->with('book-masterclass-successfull', 'Congratulations, you have successfully booked a masterclass. Please visit your email address to complete your booking by updating your receipt number.');
            } else {
                return redirect()->back()->with('book-masterclass-failed', 'Operation failed. Please try again later');
            }
        }
    }

    //Function responsible for redirecting to the sustainability at bigmompastry page
    protected function bigMomSustainabilityIndex() {
        return view('pages.about_us_pages.sustainability');
    }



}
