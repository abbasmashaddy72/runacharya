<?php

// Application

use Rawilk\Breadcrumbs\Facades\Breadcrumbs;
use Rawilk\Breadcrumbs\Support\Generator;

Breadcrumbs::for('#', function (Generator $trail) {
    $trail->push('Application', '/');
});

// Application > User
Breadcrumbs::for('users.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Users', route('users.index'));
});

// Application > Service
Breadcrumbs::for('services.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Services', route('services.index'));
});

// Application > About
Breadcrumbs::for('about.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('About Us', route('about.index'));
});

// Application > Dontact
Breadcrumbs::for('contact.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Contact Us', route('contact.index'));
});

// Application > Doctors
Breadcrumbs::for('doctors.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Doctors', route('doctors.index'));
});

// Application > HomePage
Breadcrumbs::for('homepage.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Home Page', route('homepage.index'));
});

// Application > Contact Form Data
Breadcrumbs::for('contacted-form.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Contacted Form Data', route('contacted-form.index'));
});

// Application > BookedAppointment Form Data
Breadcrumbs::for('booked-appointment-form.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Booked Appointment', route('booked-appointment-form.index'));
});
