<?php

namespace App\Controllers;


class Prescription extends BaseController
{

     
    public function addcasestudy()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        
          echo view('partials/sidebar');
         echo view('prescription/addcasestudy');
         echo view('partials/footer');
      
       
       
      
    }
}