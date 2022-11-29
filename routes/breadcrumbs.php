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

// Application > contact
Breadcrumbs::for('contact.index', function (Generator $trail) {
    $trail->parent('#');
    $trail->push('Contact Us', route('contact.index'));
});
