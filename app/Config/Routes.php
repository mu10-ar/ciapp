<?php

namespace Config;

use App\Controllers\Prescription;

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
#home routes 

$routes->get('/login', 'Home::login');
$routes->add('/auth', 'home::login');
$routes->add('/logout', 'Login::logout');





// User Routes
$routes->add('/createuser', 'doctor::index');
$routes->add('/norecord', 'user::norecord');
$routes->add('/addnurse', 'nurse::addnurse');
$routes->add('/nurselist', 'nurse::nurselist');
$routes->add('/assignnurse', 'nurse::assignnurse');
$routes->add('/assignednurse', 'nurse::assignednurse');
$routes->add('/doctorslist', 'doctor::doctorslist');
$routes->add('/unassign/(:num)', 'nurse::unassign/$1');
$routes->add('/delete/(:num)', 'doctor::deleteuser/$1');
$routes->add('/deletenurse/(:num)', 'nurse::deleteuser/$1');
$routes->add('/update/(:num)', 'doctor::updateuser/$1');
$routes->add('/updatenurse/(:num)', 'nurse::updateuser/$1');
$routes->add('/profile/(:num)', 'doctor::userprofile/$1');
$routes->add('/updatepatient/(:num)', 'patient::updatepatient/$1');
$routes->add('/deletepatient/(:num)', 'patient::deletepatient/$1');
$routes->add('/adduser', 'user::adduser');
$routes->add('/employeelist', 'user::employeelist');
$routes->add('/addpatient', 'patient::addpatient');
$routes->add('/patientlist', 'patient::patientlist');
$routes->add('/updateemployee/(:num)', 'user::updateemployee/$1');
$routes->add('/deleteemployee/(:num)', 'user::deleteemployee/$1');

// Appointment Routes
$routes->add('/approve/(:num)/(:num)', 'appointment::approve/$1/$2');
$routes->add('/decline/(:num)', 'appointment::decline/$1');
$routes->add('/myschedule/(:num)', 'appointment::myschedule/$1');
$routes->add('/addappointment', 'appointment::addappointment');
$routes->add('/appointments', 'appointment::appointments');

// Medicine Routes
$routes->add('/editmedicine/(:num)', 'medicinecontroller::editmedicine/$1');
$routes->add('/deletemedicine/(:num)', 'medicinecontroller::deletemedicine/$1');
$routes->add('/viewmedicine/(:num)', 'medicinecontroller::viewmedicine/$1');
$routes->add('/addmedicine', 'medicinecontroller::addmedicine');
$routes->add('/medicinelist', 'medicinecontroller::medicinelist');

// Department Routes
$routes->add('/department', 'departmentController::index');
$routes->add('/createdepartment', 'departmentController::createDepartment');
$routes->add('/editdepartment/(:num)', 'departmentController::updatedepartment/$1');
$routes->add('/deletedepartment/(:num)', 'departmentController::deletedepartment/$1');

// Case Study Routes 
$routes->add('/editcasestudy/(:num)', 'prescription::editcasestudy/$1');
$routes->add('/deletecasestudy/(:num)', 'prescription::deletecasestudy/$1');
$routes->add('/viewcasestudy/(:num)', 'prescription::casestudyinfo/$1');
$routes->add('/mycasestudy/(:num)', 'prescription::mycasestudy/$1');
$routes->add('/addcasestudy', 'prescription::addcasestudy');
$routes->add('/casestudylist', 'prescription::casestudylist');


// Bed Roautes
$routes->add('/addbed', 'BedController::addbed');
$routes->add('/bedlist', 'bedcontroller::bedlist');
$routes->add('/assignbed', 'bedcontroller::assignbed');
$routes->add('/assignedbed', 'bedcontroller::assignedbed');
$routes->add('/discharge/(:num)', 'bedcontroller::discharge/$1');

// Message Routes 
$routes->add('/inbox', 'messages::inbox');
$routes->add('/sent', 'messages::sent');
$routes->add('/newmessage', 'messages::newmessage');
$routes->add('/deletemessage/(:num)', 'messages::delete/$1');


// Prescription Routes 
$routes->add('/addprescription', 'prescription::addprescription');
$routes->add('/prescriptionlist', 'prescription::prescriptionlist');

$routes->add('/deleteprescription/(:num)', 'prescription::delete/$1');
$routes->add('/myprescription/(:num)', 'prescription::myprescription/$1');

//  Notification Routes 
$routes->add('/deletenotification/(:num)', 'notifications::deletenotification/$1');
$routes->add('/notifications', 'notifications::notifications');

//  Billing routes
$routes->add('/addbill', 'BillingController::addbill');
$routes->add('/billlist', 'BillingController::billlist');
$routes->add('/viewbill/(:num)', 'BillingController::viewbill/$1');
$routes->add('/markaspaid/(:num)', 'BillingController::markaspaid/$1');
$routes->add('/viewpaidbill/(:num)', 'BillingController::viewpaidbill/$1');
$routes->add('/printbill/(:num)', 'BillingController::printbill/$1');
$routes->add('/paidbill', 'BillingController::paidbill');






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