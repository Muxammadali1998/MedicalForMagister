<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('site.pages.home');
    }
    public function about()
    {
        return view('site.pages.about');
    }
    public function contact()
    {
        return view('site.pages.contact');
    }
    public function service()
    {
        return view('site.pages.service');
    }
    public function appointment()
    {
        return view('site.pages.appointment');
    }
    public function doctor()
    {
        return view('site.pages.doctor');
    }
    public function feature()
    {
        return view('site.pages.feature');
    }

}
