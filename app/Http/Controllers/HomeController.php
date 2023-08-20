<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //create function to render home page
    public function index()
    {
        
        return view('home');
    }
}
