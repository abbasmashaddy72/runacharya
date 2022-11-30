<?php

namespace App\Http\Controllers;

use App\Models\ServiceDepartment;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        view()->share('title', 'Services');

        return view('pages.backend.services.index');
    }
}
