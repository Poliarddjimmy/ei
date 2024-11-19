<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Welcome
Breadcrumbs::for('welcome', function (BreadcrumbTrail $trail) {
    $trail->push('Welcome', route('welcome'));
});

// Welcome > Projects
Breadcrumbs::for('projects', function (BreadcrumbTrail $trail) {
    $trail->parent('welcome');
    $trail->push('Projects', route('projects'));
});

// Welcome > Projects > [slug]
Breadcrumbs::for('projects.show', function (BreadcrumbTrail $trail, $project) {
    $trail->parent('projects');
    $trail->push($project->slug, route('projects.show', $project));
});

//Welcome > Services
Breadcrumbs::for('services', function (BreadcrumbTrail $trail) {
    $trail->parent('welcome');
    $trail->push('Services', route('services'));
});

// Welcome > Services > [slug]
Breadcrumbs::for('services.show', function (BreadcrumbTrail $trail, $service) {
    $trail->parent('services');
    $trail->push($service->name, route('services.show', $service));
});

// Welcome > Contact
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->parent('welcome');
    $trail->push('Contact', route('contact'));
});

// Welcome > About Us
Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('welcome');
    $trail->push('About Us', route('about'));
});