<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    //Function responsible for redirecting to the Our Values page
    protected function values() {
        return view("pages.about_us_pages.values");
    }

    //Function responsible for redirecting to the Book Masterclass page
    protected function bookMasterclassIndex() {
        return view("pages.about_us_pages.masterclass");
    }

    //Function responsible for posting the Book Masterclass form content to the database
    protected function bookMasterclassIndex(Request $request) {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'min:1', 'max:19'],
            'surname' => ['required', 'string', 'min:1', 'max:19'],
            'middle_name' => ['required', 'string', 'min:1', 'max:19'],
            'id_number' => ['required', 'integer', 'min:8', 'max:8'],
            'date_of_birth' => ['required', 'date'],
            'age' => ['required', 'integer'],
            'phone_number' => ['required', 'digits:10'],
            'email' => ['required', 'email'],
            'place_of_residence' => ['required', 'string', 'min:3', 'max:49'],
            'apprentice_id' => ['required', 'digits', 'unique:book_masterclass', 'min:3', 'max:1000000001'],
            'apprentice_session' => ['required', 'string'],
            'product_course' => ['required', 'string'],
            'payment_mode' => ['required', 'string'],
            'amount' => ['required', 'integer'],
        ]);

        if ($data) {
            $booMasterclass = BookMaterclass::create([
                'first_name' => $request->input('first_name'),
                'surname' => $request->input('surname'),
                'middle_name' => $request->input('middle_name'),
                'id_number' => $request->input('id_number'),
                'date_of_birth' => $request->input('date_of_birth'),
                'age' => $request->input('age'),
                'phone_number' => $request->input('phone_number'),
                'email' => $request->input('email'),
                'place_of_residence' => $request->input('place_of_residence'),
                'apprentice_id' => $request->input('apprentice_id'),
                'apprentice_session' => $request->input('apprentice_session'),
                'product_course' => $request->input('product_course'),
                'payment_mode' => $request->input('payment_mode'),
                'amount' => $request->input('amount'),
            ]);

            if ($booMasterclass) {
                return redirect()->back()->with('book-masterclass-successfull', 'Congratulations, you have successfully booked a masterclass');
            } else {
                return redirect()->back()->with('book-masterclass-failed', 'Operation failed. Please try again later');
            }
        }
    }



}
