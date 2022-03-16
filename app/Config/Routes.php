<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Users::index');
$routes->post('login/puc', 'rh::login');
$routes->get('rh/dachbourd', 'rhdashboard::index');

$routes->add('rh/langue/(:any)', 'lag::delete/$1');
$routes->add('rh/langueget/(:any)', 'lag::fer/$1');
$routes->add('rh/langueup', 'lag::update');
$routes->add('rh/langue', 'lag::index');
$routes->add('rh/offre', 'offre::index');
$routes->add('rh/off', 'offre::add');
$routes->add('rh/off', 'offre::niveau');
$routes->add('rh/diplome', 'diplome::index');
$routes->add('rh/diplome/(:any)', 'diplome::delete/$1');
$routes->add('rh/diplomeget/(:any)', 'diplome::fer/$1');
$routes->add('rh/diplomeup', 'diplome::update');
$routes->add('rh/ajout', 'envoye::index');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}