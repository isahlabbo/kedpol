<?php

Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('welcome'));
});

Breadcrumbs::for('senatorial-zone', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Senatorial Zone', route('senatorial-zone.index'));
});