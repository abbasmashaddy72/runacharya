<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactedFromController extends Controller
{
    public function index()
    {
        view()->share('title', 'Contacted Form Data');

        return view('pages.backend.contact.form-data');
    }
}
