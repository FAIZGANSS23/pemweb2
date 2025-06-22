<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route dari tugas sebelumnya
$routes->get('/matkul', 'Aku::matkul');
$routes->get('/hobi', 'Aku::hobi');
$routes->get('/proyek', 'Aku::film');
$routes->get('/beranda', 'Aku::beranda');
$routes->get('/daftar-game', 'Aku::daftargame');
$routes->get('/cara-topup', 'Aku::caratopup');

// Route dari tugas baru
$routes->group('books', function ($routes) {
    $routes->get('/', 'Books::index');
    $routes->get('create', 'Books::create');
    $routes->post('save', 'Books::save');
    $routes->get('edit/(:segment)', 'Books::edit/$1');
    $routes->post('update/(:num)', 'Books::update/$1');
    $routes->delete('(:num)', 'Books::delete/$1');
    $routes->get('(:segment)', 'Books::detail/$1');
});

// Route tambahan dari GitHub
$routes->get('/', 'Home::index');
$routes->get('/halaman', 'Page::index');
$routes->get('/tos', 'Page::tos');
$routes->get('/biodata', 'Page::biodata');
