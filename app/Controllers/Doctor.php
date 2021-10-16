<?php

namespace App\Controllers;


class Doctor extends BaseController
{

     
    public function index()
    
    {
          echo view('partials/sidebar');
         echo view('doctor/adddoctor');
         echo view('partials/footer');
      
    }

     public function doctorslist()
    {
         echo view('partials/sidebar');
         echo view('doctor/doctorslist');
         echo view('partials/footer');

    }

    
}