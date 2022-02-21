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



}
