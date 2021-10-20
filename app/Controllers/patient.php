<?php

namespace App\Controllers;


class Patient extends BaseController
{

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



     public function patientlist()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        
          echo view('partials/sidebar');
         echo view('patient/patientlist');
         echo view('partials/footer');
      
       
       
      
    }

   
}