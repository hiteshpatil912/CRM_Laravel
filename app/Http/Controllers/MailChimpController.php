<?php

namespace App\Http\Controllers;

use App\Mail\MailChimp;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;

class MailChimpController extends Controller
{  
    
  
    public function redirect(Request $request)
    {
        // Mail::to()->send();
        return view('mailchimp');
        // return back();
    }
  
    public function callback(Request $request)
    {
        // dd($request);
        Mail::to($request->email)->send(new MailChimp(auth()->user(), $request->msg));
  
       return redirect()->back()->with('success', 'Mailchimp connection successfully connected!');
     }
  
}
