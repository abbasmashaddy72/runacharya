<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookedAppointmentController extends Controller
{
    public function index()
    {
        view()->share('title', 'Booked Appointments');

        return view('pages.backend.booked-appointment.form-data');
    }
}
