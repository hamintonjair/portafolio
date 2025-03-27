<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('proyectos', 'Home::proyectos');

$routes->get('/login', 'AuthController::login');
$routes->post('/auth/doLogin', 'AuthController::doLogin');
$routes->get('/logout', 'AuthController::logout');

$routes->group('dashboard', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'DashboardController::index');
    $routes->get('perfil', 'DashboardController::perfil');
    $routes->post('guardarPerfil', 'DashboardController::guardarPerfil');
    $routes->get('proyectos', 'DashboardController::proyectos');
    $routes->post('proyectos/guardar', 'DashboardController::guardar');
    $routes->get('proyectos/listar', 'DashboardController::listarProyectos');
    $routes->get('proyectos/eliminar/(:num)', 'DashboardController::eliminar/$1');
    $routes->post('proyectos/update/(:num)', 'DashboardController::update/$1');
    $routes->get('proyectos/obtener/(:num)', 'DashboardController::obtener/$1');
});
