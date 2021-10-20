<?php

namespace App\Controllers;


class Patient extends BaseController
{

     
    public function index()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        
          echo view('partials/sidebar');
         echo view('doctor/dashboard');
         echo view('partials/footer');
      
       
       
      
    }



       public function addpatient()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        
          echo view('partials/sidebar');
         echo view('patient/addpatient');
         echo view('partials/footer');
      
       
       
      
    }

   
}