<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GalleryController extends Controller
{
    
    public function index(User $user)
    {
        return view('gallery', ['user' => $user]);
    }
}
