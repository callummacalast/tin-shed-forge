<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

<<<<<<< HEAD
    public function show(Contact $contact_details)
    {
        return view('home')->with('contact_details', $contact_details);
=======
    public function show()
    {
        $contacts = Contact::all();

        return view('home', compact('contacts'));
>>>>>>> 14a5e7ac15e21c4cc6f0636893ac9dcaf0dc55bb
    }
}
