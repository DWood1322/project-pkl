<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */






















$routes->get('/', 'Main\Home::index');
$routes->get('/docs', 'Main\Home::docs');
$routes->get('/about', 'Main\Home::about');
$routes->get('/sign-in', 'Main\Home::signin');
$routes->get('/sign-up', 'Main\Home::signup');