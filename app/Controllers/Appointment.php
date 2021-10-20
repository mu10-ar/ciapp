<?php

namespace App\Controllers;


class Appointment extends BaseController
{

     
    public function addappointment()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        
          echo view('partials/sidebar');
         echo view('appointment/addappointment');
         echo view('partials/footer');
      
       
       
      
    }


     public function appointments()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        
          echo view('partials/sidebar');
         echo view('appointment/appointmentlist');
         echo view('partials/footer');
      
       
       
      
    }
}