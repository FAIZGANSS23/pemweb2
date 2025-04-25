<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halaman', 'Page::index');
$routes->get('/tos', 'Page::tos');
$routes->get('/biodata', 'Page::biodata');
