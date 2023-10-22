<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Visitor\HomeController::index');

$routes->presenter('auth', ['controller' => 'AuthController']);

$routes->group('admin', function ($routes) {
    $routes->presenter('dashboard', ['controller' => 'Admin\DashboardController']);
});
