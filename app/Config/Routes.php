<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// routes bassed
$routes->get('/', 'Home::index');

// routes auth
$routes->get('auth/login', 'Auth::login');
$routes->get('auth/register', 'Auth::register');


// routes user pelanggan
$routes->get('pelanggan/home', 'User::pelanggan_home');

// routes test
$routes->get('/katalog', 'BarangController::katalog');



if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . 'Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . 'Routes.php';
}
