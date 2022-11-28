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
    $trail->push('User', route('users.index'));
});
