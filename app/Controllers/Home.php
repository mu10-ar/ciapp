<?php

namespace App\Controllers;


class Home extends BaseController
{

     
    public function index()
    {
         echo view('createdoctor');
      
       
       
      
    }
    public function createdocter()
    {
         if (isset($POST['submit'])) {
             echo "great";
         }
      echo " not great";
       
       
      
    }
}