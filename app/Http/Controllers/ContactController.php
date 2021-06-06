<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function formSubmission()
    {
        # allow user to send contact email using SendGrid API
    }
}
