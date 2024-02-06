<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/:(:num)', 'Home::index/$1');
// $routes->match(['get', 'post'], "insert", "Home::insert");
$routes->get('/search', 'FormController::search');
$routes->get('/multiple', 'MultipleController::multiple');
$routes->match(['get','post'], 'FormController/search', 'FormController::search'); 
$routes->match(['get','post'], 'MultipleController/multiple', 'MultipleController::multiple'); 
