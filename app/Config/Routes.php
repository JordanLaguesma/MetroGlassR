<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Login for users
$routes->group('login', function ($routes) {
    $routes->group('users', function ($routes) {
        $routes->get('/', 'Auth::ui_admin');

        #Backend
        $routes->post('/', 'Auth::auth_admin');
    });
});

$routes->group('users', ['filter' => 'auth_user'], function ($routes) {
    $routes->group('admin', function ($routes) {
        $routes->get('/', 'UIAdmin::ui_dashboard');
    });

    $routes->group('cashier', function ($routes) {
        $routes->get('/', 'UICashier::ui_dashboard');
    });

    $routes->group('delivery', function ($routes) {
        $routes->get('/', 'UIDelivery::ui_main');
    });

    # Backend
    $routes->get('logout', 'Auth::logout_user');
});

$routes->group('customer', function ($routes) {
    $routes->get('home', 'UICustomer::ui_home');
    $routes->get('product_details', 'UICustomer::ui_product_details');
    $routes->get('profile', 'UICustomer::ui_profile');
    // Must be logged in
    $routes->get('cart', 'UICustomer::ui_cart', ['filter' => 'auth_customer']);
    $routes->get('checkout', 'UICustomer::ui_checkout', ['filter' => 'auth_customer']);
    $routes->group('login', function ($routes) {
        $routes->get('/', 'Auth::ui_customer');

        # Backend
        $routes->post('/', 'Auth::auth_customer');
        $routes->get('logout', 'Auth::logout_customer');
    });
});
