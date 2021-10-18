<?php

namespace App\Controllers;


class Home extends BaseController
{

     
    public function index()
    {
          echo view('partials/sidebar');
         echo view('doctor/dashboard');
         echo view('partials/footer');
      
       
       
      
    }

    public function login()
    {
       
         echo view('login/login');
       
    }
   
}