<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/welcome_message', 'Home::index');
$routes->get('/DataDiri', 'Home::Diriku'); //tombol datadiri pada tampilan awal  