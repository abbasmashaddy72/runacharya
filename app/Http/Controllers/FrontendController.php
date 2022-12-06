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
        return view('pages.frontend.index');
    }

    public function about_us()
    {
        view()->share('title', 'About Us');

        return view('pages.frontend.about_us');
    }

    public function services()
    {
        view()->share('title', 'Services');

        return view('pages.frontend.services');
    }

    public function doctors()
    {
        view()->share('title', 'Doctors');

        return view('pages.frontend.doctors');
    }

    public function gallery()
    {
        view()->share('title', 'Gallery');

        return view('pages.frontend.gallery');
    }

    public function contact_us()
    {
        view()->share('title', 'Contact Us');

        return view('pages.frontend.contact_us');
    }

    public function book_appointment()
    {
        view()->share('title', 'Book Appointment');

        return view('pages.frontend.book_appointment');
    }
}
