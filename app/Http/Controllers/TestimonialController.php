<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        view()->share('title', 'Testimonials');

        return view('pages.backend.testimonials.index');
    }
}
