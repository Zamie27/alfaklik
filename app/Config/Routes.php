<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// routes bassed
$routes->get('/', 'Home::index');
$routes->get('logout', 'Home::logout', ['as' => 'logout']);


// routes auth
$routes->get('auth/login', 'Auth::login');
$routes->get('auth/register', 'Auth::register');
$routes->get('auth/otp', 'Auth::otp');


// routes user pelanggan
$routes->get('pelanggan/home', 'User::pelanggan_home');
$routes->get('barang/detail/(:num)', 'User::detail_barang/$1');
$routes->get('pelanggan/cart', 'User::pelanggan_cart');
$routes->get('pelanggan/cartupdate', 'User::pelanggan_cartupdate');
$routes->post('pelanggan/cart/add', 'User::addToCart');
$routes->post('pelanggan/cart/clear', 'User::clearCart');



// routes test




if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . 'Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . 'Routes.php';
}
