<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/matkul', 'aku::matkul');
$routes->get('/hobi', 'aku::hobi');
$routes->get('/proyek', 'aku::proyek');
$routes->get('/film', 'aku::film');
