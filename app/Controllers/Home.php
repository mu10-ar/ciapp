<?php

namespace App\Controllers;


class Home extends BaseController
{

     
    public function index()
    {
        $islogin=false;
        // if ($islogin!='true') {
        //      return redirect()->to(base_url().'/login');
        // }
        
          echo view('partials/sidebar');
         echo view('doctor/dashboard');
         echo view('partials/footer');
      
       
       
      
    }

    public function login()
    {
       
         echo view('login/login');
       
    }
   
}