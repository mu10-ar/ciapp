<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\bedModel;
use App\models\DepartmentModel;
use App\models\UserModel;
use CodeIgniter\Database\Query;

$db = db_connect();

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
              return  redirect()->to('bedlists');
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

        $data=[];
        $bed= new bedModel();
        // $data['bed']= $bed->getAvailableBeds();
        $query='SELECT * FROM beds  INNER JOIN departments ON beds.department_id=departments.department_id WHERE status = "1"';
        $db = db_connect();
        $results=$db->query($query);
        $data['beds']=$results->getResultArray();
        



        
          echo view('partials/sidebar',$data);
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