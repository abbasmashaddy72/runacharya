<?php

// Application

use Rawilk\Breadcrumbs\Facades\Breadcrumbs;
use Rawilk\Breadcrumbs\Support\Generator;

Breadcrumbs::for('#', function (Generator $trail) {
    $trail->push('Application', '/');
});
