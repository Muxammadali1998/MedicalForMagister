<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Job;

class PagesController extends Controller
{
    public function home()
    {
        $doctors = Doctor::all();
        $jobs = Job::all();
        return view('site.pages.home', compact('doctors', 'jobs')) ;
    }
    public function about()
    {
        $doctors = Doctor::all();
        return view('site.pages.about', compact('doctors')) ;
    }
    public function contact()
    {
        return view('site.pages.contact');
    }
    public function service()
    {
        $jobs = Job::all();
        return view('site.pages.service', compact('jobs')) ;
    }
    public function appointment()
    {
        return view('site.pages.appointment');
    }
    public function doctor()
    {
        $doctors = Doctor::all();
        return view('site.pages.doctor', compact('doctors')) ;
    }
    public function feature()
    {
        return view('site.pages.feature');
    }

}
