<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function __construct()
    {
        view()->share('', '');
        view()->share('', '');
        view()->share('', '');
        view()->share('', '');
    }

    public function index()
    {
        return view();
    }

    public function about_us()
    {
        return view();
    }

    public function services()
    {
        return view();
    }

    public function doctors()
    {
        return view();
    }

    public function gallery()
    {
        return view();
    }

    public function contact_us()
    {
        return view();
    }

    public function book_appointment()
    {
        return view();
    }
}
