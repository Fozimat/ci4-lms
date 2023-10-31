<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('learning', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'LearningController::index', ['as' => 'learning.index']);
    $routes->get('create', 'LearningController::create', ['as' => 'learning.create']);
    $routes->post('store', 'LearningController::store', ['as' => 'learning.store']);
    $routes->get('edit/(:num)', 'LearningController::edit/$1', ['as' => 'learning.edit']);
    $routes->put('update/(:num)', 'LearningController::update/$1', ['as' => 'learning.update']);
    $routes->delete('delete/(:num)', 'LearningController::delete/$1', ['as' => 'learning.delete']);
});
