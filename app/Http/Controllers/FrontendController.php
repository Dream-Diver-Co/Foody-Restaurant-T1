<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.page.about');
    }

    public function services()
    {
        return view('frontend.page.services');
    }

    public function events()
    {
        return view('frontend.page.events');
    }

    public function contact()
    {
        return view('frontend.page.contact');
    }

    public function menu()
    {
        return view('frontend.page.menu');
    }

    public function menu2()
    {
        return view('frontend.page.menu2');
    }

    public function subscription()
    {
        return view('frontend.page.subscription');
    }

    public function chef()
    {
        return view('frontend.page.chef');
    }

    public function page()
    {
        return view('frontend.page.pages');
    }

    public function booking()
    {
        return view('frontend.page.booking');
    }

    public function blog()
    {
        return view('frontend.page.blog');
    }

    public function team()
    {
        return view('frontend.page.team');
    }

    public function testimonial()
    {
        return view('frontend.page.testimonial');
    }
}

