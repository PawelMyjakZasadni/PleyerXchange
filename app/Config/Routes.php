<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
//DODANIE ROUTINGU DLA KONTROLLERA REJESTRACJA
$routes->get('regs', 'Regs::index');
$routes->get('/login', 'Login::index');
$routes->get('/wyloguj', 'wyloguj::logout');



$routes->get('AdminPanel', 'AdminPanel::index');
$routes->get('AdminPanel-add', 'AdminPanel::create');
$routes->post('AdminPanel-store', 'AdminPanel::store');
$routes->get('AdminPanel/edit/(:num)', 'AdminPanel::edit/$1');
$routes->post('AdminPanel/update/(:num)', 'AdminPanel::update/$1');
$routes->get('AdminPanel/delete/(:num)', 'AdminPanel::delete/$1');

$routes->get('AdminPanel-addP', 'AdminPanel::createP');
$routes->post('AdminPanel-storeP', 'AdminPanel::storeP');
$routes->get('AdminPanel/editP/(:num)', 'AdminPanel::editP/$1');
$routes->post('AdminPanel/updateP/(:num)', 'AdminPanel::updateP/$1');
$routes->get('AdminPanel/deleteP/(:num)', 'AdminPanel::deleteP/$1');



$routes->get('AdminPlayers', 'AdminPlayers::index');



$routes->post('profil/edit', 'profil::edit');
$routes->post('profil/update', 'profil::update');


$routes->get('wypiszklub', 'wypiszklub::index');


//yours clab 
$routes->get('yours_clab', 'yours_clab::index');
$routes->get('yours_clab-add', 'yours_clab::create');
$routes->post('yours_clab-store', 'yours_clab::store');
$routes->get('yours_clab/delete/(:num)', 'yours_clab::delete/$1');


// players data
$routes->get('players','playerscontroller::index');

$routes->get('session', 'SessionController::index');
$routes->get('clear-session', 'SessionController::clearSession');
$routes->get('SessionController/clearSession', 'SessionController::clearSession');

$routes->get('ofert', 'ofert::index');
$routes->get('ofert/delete/(:num)', 'ofert::delete/$1');
$routes->get('ofert-add', 'ofert::create');
$routes->post('ofert-store', 'ofert::store');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
