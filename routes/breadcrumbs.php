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
    $trail->push('Users', route('admin.users.index'));
});

// Application > Service
Breadcrumbs::for('services.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Services', route('admin.services.index'));
});

// Application > About
Breadcrumbs::for('about.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('About Us', route('admin.about.index'));
});

// Application > Dontact
Breadcrumbs::for('contact.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Contact Us', route('admin.contact.index'));
});

// Application > Doctors
Breadcrumbs::for('doctors.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Doctors', route('admin.doctors.index'));
});

// Application > HomePage
Breadcrumbs::for('homepage.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Home Page', route('admin.homepage.index'));
});

// Application > Contact Form Data
Breadcrumbs::for('contacted-form.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Contacted Form Data', route('admin.contacted-form.index'));
});

// Application > Booked Appointment Form Data
Breadcrumbs::for('booked-appointment-form.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Booked Appointment', route('admin.booked-appointment-form.index'));
});

// Application > Profile Update
Breadcrumbs::for('edit.profile', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Profile Update', route('admin.profile.edit'));
});
