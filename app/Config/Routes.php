<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');


$routes->group('CifradoEscitala', function ($routes) {
    $routes->get('/', 'CifradoEscitala::index');
    $routes->post('cifrar', 'CifradoEscitala::cifrar');
    $routes->post('descifrar', 'CifradoEscitala::descifrar');
});

$routes->group('CifradoCesar', function ($routes) {
    $routes->get('/', 'CifradoCesar::index');
    $routes->post('cifrar', 'CifradoCesar::cifrar');
    $routes->post('descifrar', 'CifradoCesar::descifrar');
});


