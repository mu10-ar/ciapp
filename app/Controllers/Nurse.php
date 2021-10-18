<?php

namespace App\Controllers;


class Nurse extends BaseController
{

     
    public function addnurse()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        
          echo view('partials/sidebar');
         echo view('nurse/addnurse');
         echo view('partials/footer');
      
       
       
      
    }

    public function login()
    {
       
         echo view('login/login');
       
    }
   
}