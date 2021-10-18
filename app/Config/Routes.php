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
$routes->add('/createdoctor', 'doctor::index');
$routes->add('/department', 'departmentController::index');
$routes->add('/createdepartment', 'departmentController::createDepartment');
$routes->add('/doctorslist', 'doctor::doctorslist');
// $routes->add('/message/(:num)', 'doctor::message/$1');
$routes->add('/delete/(:num)', 'doctor::deleteuser/$1');
$routes->add('/update/(:num)', 'doctor::updateuser/$1');
$routes->add('/profile/(:num)', 'doctor::userprofile/$1');
$routes->add('/editdepartment/(:num)', 'departmentController::updatedepartment/$1');
$routes->add('/deletedepartment/(:num)', 'departmentController::deletedepartment/$1');




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