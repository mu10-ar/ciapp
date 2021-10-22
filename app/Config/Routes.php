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
$routes->get('/login', 'Home::login');
$routes->add('/auth', 'Login::index');
$routes->add('/logout', 'Login::logout');
$routes->add('/createuser', 'doctor::index');
$routes->add('/addnurse', 'nurse::addnurse');
$routes->add('/nurselist', 'nurse::nurselist');
$routes->add('/department', 'departmentController::index');
$routes->add('/createdepartment', 'departmentController::createDepartment');
$routes->add('/doctorslist', 'doctor::doctorslist');
// $routes->add('/message/(:num)', 'doctor::message/$1');
$routes->add('/delete/(:num)', 'doctor::deleteuser/$1');
$routes->add('/update/(:num)', 'doctor::updateuser/$1');
$routes->add('/profile/(:num)', 'doctor::userprofile/$1');
$routes->add('/editdepartment/(:num)', 'departmentController::updatedepartment/$1');
$routes->add('/deletedepartment/(:num)', 'departmentController::deletedepartment/$1');
$routes->add('/editmedicine/(:num)', 'medicinecontroller::editmedicine/$1');
$routes->add('/deletemedicine/(:num)', 'medicinecontroller::deletemedicine/$1');
$routes->add('/viewmedicine/(:num)', 'medicinecontroller::viewmedicine/$1');
$routes->add('/updatepatient/(:num)', 'patient::updatepatient/$1');
$routes->add('/deletepatient/(:num)', 'patient::deletepatient/$1');
$routes->add('/editappointment/(:num)', 'appointment::editappointment/$1');
$routes->add('/deleteappointment/(:num)', 'appointment::deleteappointment/$1');
$routes->add('/updateemployee/(:num)', 'user::updateemployee/$1');
$routes->add('/deleteemployee/(:num)', 'user::deleteemployee/$1');
$routes->add('/addpatient', 'patient::addpatient');
$routes->add('/patientlist', 'patient::patientlist');
$routes->add('/adduser', 'user::adduser');
$routes->add('/employeelist', 'user::employeelist');
$routes->add('/nurselist', 'nurse::nurselist');
$routes->add('/addappointment', 'appointment::addappointment');
$routes->add('/appointments', 'appointment::appointments');
$routes->add('/addmedicine', 'medicinecontroller::addmedicine');
$routes->add('/medicinelist', 'medicinecontroller::medicinelist');
$routes->add('/addcasestudy', 'prescription::addcasestudy');
$routes->add('/casestudylist', 'prescription::casestudylist');




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