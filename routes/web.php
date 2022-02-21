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

        //Route that posts guests newsletter subscriptions to the database
        Route::post('/', [App\Http\Controllers\NewsletterController::class, 'newsletterPost'])->name('guestNewsletter');

    });

    //End of Guest Middleware Protection
    Auth::routes([
        //Responsible for enforcing email verification
        'verify' => true,
    ]);

    //Start of Email Verification Middleware Protection
    Route::group(['middleware' => ['verified']], function() {

        //Start of Auth Middleware Protection
        Route::group(['middleware' => ['auth']], function() {

            //Start of Prevent Back History Middleware Protection
            Route::group(['middleware' => ['prevent-back-history']], function() {

                //Start of Standard User Middleware Protection
                Route::group(['middleware' => ['standard']], function() {

                    //Route that posts guests newsletter subscriptions to the database
                    Route::post('/home', [App\Http\Controllers\NewsletterController::class, 'newsletterPost'])->name('standardUserNewsletter');

                    //Route responsible for redirecting to the landing page after logging In and verifying the email
                    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
                });
                //End of Standard User Middleware Protection
            });
            //End of Prevent Back History Middleware Protection
        });
        //End of Auth Middleware Protection
    });
    //End of Email Verification Middleware Protection
});
//End of XSS Protection


