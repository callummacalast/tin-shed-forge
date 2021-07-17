<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'contact_name' => 'required|max:255',
            'contact_email' => 'required',
            'contact_message' => 'required'
        ]);

        $contact_details = new Contact; // instantiating the contact model

        $contact_details->contact_name = $request->contact_name;
        $contact_details->contact_email = $request->contact_email;
        $contact_details->contact_message = $request->contact_message;

        $contact_details->save();

        return redirect('contact')->with('status', 'Your message has been sent, we will try our best to get back to you as soon as possible');


    }

    public function show()
    {

    }
}
