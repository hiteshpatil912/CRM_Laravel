<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contact.contactForm');
    }

    public function storeContactForm(Request $request)
    {
        // dd($request);
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'accounts' => 'required',
            'email' => 'required|email',
            // 'addEmail' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'message' => 'required',
        ]);
        Contact::create(
            $request->all()
        );
         $request->all();
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }

    public function view()
    {
        return view('contact.view',[
            'contact'=> Contact::paginate(5)
    ]);
    }
}
