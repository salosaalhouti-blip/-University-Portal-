<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
     public function index()
    {
        return view('Home.index');
    }
    public function about()
    {
        return view('Home.about');
    }
    public function contact()
    {
        return view('Home.contact');
    }
}
