<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Start of XSS Protection

Route::group(['middleware' => ['Xss']], function() {

    //Start of Guest Middleware Protection

    Route::group(['middleware' => ['guest']], function() {

        //Route that redirects to the systems landing page
        Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');

    });

    //End of Guest Middleware Protection

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

//End of XSS Protection


