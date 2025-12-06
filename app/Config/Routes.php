<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('tabed/', 'Home::tab');

$routes->get('contact/', 'Contact::index');
