<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('about.index');
    }

    public function services()
    {
        return view('services.index');
    }

    public function portfolio()
    {
        return view('portfolio.index');
    }

    public function team()
    {
        return view('team.index');
    }

    public function contact()
    {
        return view('contact.index');
    }
}
