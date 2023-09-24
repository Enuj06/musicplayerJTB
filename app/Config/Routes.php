<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 /* VIEWS / CONTROLLER METHOD */
 /* VIEWS / CONTROLLER METHOD */
 /* VIEWS / CONTROLLER METHOD */

$routes->get('/', 'Home::index');
$routes->get('/home', 'MusicController::home');
$routes->get('/insert_playlist', 'MusicController::insert_playlist');

