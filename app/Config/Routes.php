<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductController::homePage');
$routes->post('/saveCategory', 'ProductController::insertCategory');
$routes->get('/insertCategory', 'ProductController::showInsertCategory');
$routes->get('/CategoryView', 'ProductController::homePage');
$routes->get('/productView/(:any)', 'ProductController::showProduct/$1');
$routes->get('/insertProduct', 'ProductController::showInsertProduct');
$routes->post('/saveProduct', 'ProductController::insertProduct');
$routes->get('/editProduct/(:any)', 'ProductController::edit/$1');
$routes->get('/delete/(:any)', 'ProductController::delete/$1');

