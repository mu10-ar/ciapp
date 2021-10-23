<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\bedModel;
use App\models\DepartmentModel;
use App\models\UserModel;

class BedController extends BaseController
{
    public function addbed()
                {
                    $data=[];



                     helper('form');
        if ($this->request->getMethod()=='post') {
            $bed=new bedModel();
            

        $input=$this->validate([
               'department_id'=> 'required'
               
           ]);


           
           
           if ($input==true) {
               
               $bed->save([
                'department_id'=> $this->request->getPost('department_id'),
                'status' => $this->request->getPost('status'),
                'description' => $this->request->getPost('description')
          
              
                
                
                
                
            ]);
             $success =true;
              return  redirect()->to('casestudylist');
           }
           else {
                  $data['validation']=$this->validator;
           }
           

            
           

        }

            $department= new DepartmentModel();
            $data['department']=$department->getDepartmentRecord();
                echo view('partials/sidebar',$data);
         echo view('bedmanager/addbed');
         echo view('partials/footer');  
    }


    public function bedlist()
    {
          echo view('partials/sidebar');
         echo view('bedmanager/bedlist');
         echo view('partials/footer'); 
    }



    public function assignbed()
    {
          echo view('partials/sidebar');
         echo view('bedmanager/bedassign');
         echo view('partials/footer'); 
    }



    public function assignedbed()
    {
          echo view('partials/sidebar');
         echo view('bedmanager/bedassignlist');
         echo view('partials/footer'); 
    }







    
}