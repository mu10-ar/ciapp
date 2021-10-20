<?php

namespace App\Controllers;


class MedicineController extends BaseController
{

     
    public function addmedicine()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        
          echo view('partials/sidebar');
         echo view('medicine/addmedicine');
         echo view('partials/footer');
      
       
       
      
    }
   
}