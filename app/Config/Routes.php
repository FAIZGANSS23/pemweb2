<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/matkul', 'Aku::matkul');
$routes->get('/hobi', 'Aku::hobi');
$routes->get('/proyek', 'Aku::film');
$routes->get('/beranda', 'Aku::beranda');
$routes->get('/daftar-game', 'Aku::daftargame');
$routes->get('/cara-topup', 'Aku::caratopup');
