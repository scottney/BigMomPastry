<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Session;

class NewsletterController extends Controller
{
    protected function newsletterPost(Request $request) 
    {
        $data = $request->validate([
            'subscription_email' => ['required', 'string', 'email', 'unique:newsletter', 'min:3', 'max:50'],
            'user_id' => ['integer', 'unique:newsletter'],
        ]);

        if ($data) {
            $newsletter = Newsletter::create([
                'subscription_email' => $request->input('subscription_email'),
                'user_id' => $request->input('user_id'),
            ]);

            if ($newsletter) {
                return redirect()->back()->with('newsletter-subscription-successfull','You have successfully subscribed to our monthly newsletter.Thank you.');
            } else {
                return redirect()->back()->with('newsletter-subscription-failed','A problem was encountered while processing your request.Please try again later.');
            }
        }
    }
}
