<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('register', 'Register::index');
$routes->post('login', 'Login::index');
$routes->get('home', 'User::index',['filter'=>'auth']);






















$routes->get('/', 'Main\Home::index');
$routes->get('/docs', 'Main\Home::docs');
$routes->get('/about', 'Main\Home::about');
$routes->get('/sign-in', 'Main\Home::signin');



