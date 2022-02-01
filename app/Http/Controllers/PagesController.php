<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Function responsible for redirecting to the landing page
    protected function index() {
        return view("index");
    }



}
