<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        view()->share('title', 'Users List');

        return view('pages.backend.users.index');
    }
}
