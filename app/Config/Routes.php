<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->post('register', 'Register::index');
$routes->post('login', 'Login::index');
$routes->get('home', 'User::index',['filter'=>'auth']);






















$routes->get('/', 'Main\Dashboard::index');
$routes->get('/docs', 'Main\Dashboard::docs');
$routes->get('/about', 'Main\Dashboard::about');
$routes->get('/sign-in', 'Main\Dashboard::signin');
$routes->get('/sign-up', 'Main\Dashboard::signup');
$routes->get('/home-tes', 'Main\Dashboard::home');



