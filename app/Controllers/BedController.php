<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\AssignBedmodel;
use App\models\bedModel;
use App\models\DepartmentModel;
use App\models\NotificationModel;
use App\models\UserModel;
use CodeIgniter\Database\Query;

$db = db_connect();

class BedController extends BaseController
{
    public function addbed()
                {

                    $session = \Config\Services::session();
                    $data['session'] = $session;
                    
                    $data=[];
                    $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }



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
            $session->setFlashdata('success', '  Bed Added Successfully');
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
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
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
    {   $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }

        
         helper('form');
        if ($this->request->getMethod()=='post') {
            $assignbed=new AssignBedmodel();

        $input=$this->validate([
               'patient_id'=> 'required',
               'assigned_bed'=> 'required',
               
               

           ]);


           
           
           if ($input==true) {
               
               $assignbed->save([
                'patient_id'=> $this->request->getPost('patient_id'),
                'assigned_bed' => $this->request->getPost('assigned_bed'),
                'description' => $this->request->getPost('description')
            
                
                
            ]);
            $bed_id = $this->request->getVar('assigned_bed');

            $notification= new NotificationModel();
            $notification->save([
                'message' => 'bed No '.$bed_id.' has been assigned to you',
                    'user_id' => $this->request->getPost('patient_id')

            ]);

            $updatestatus= new bedModel();
           
            $updatestatus->update($this->request->getPost('assigned_bed'),[
                'status' => '0'
            ]);
             
              return  redirect()->to('assignbed');
           
           }
           else {
                  $data['validation']=$this->validator;
              
           }
        }




        $patient= new UserModel();
        $data['patient']=$patient->getpatientRecord();
        $bed = new bedModel();
        $data['bed']=$bed->getAvailableBeds();

          echo view('partials/sidebar',$data);
         echo view('bedmanager/bedassign');
         echo view('partials/footer'); 
    }



    public function assignedbed()
    {   
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $data=[];
        $bed= new AssignBedmodel();
        $data['bed']=$bed->getAssignedBed();
          echo view('partials/sidebar',$data);
         echo view('bedmanager/bedassignlist');
         echo view('partials/footer'); 
    }

    
    public function discharge($id)
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
          $bed = new AssignBedmodel();
          $bed->where('assigned_bed',$id)->delete();
          $updatebed= new bedModel();
          $updatebed->update($id,[
              'status'=>'1'
          ]);

          $session->setFlashdata('success', '  Discharged Successfully');
          return redirect()->to(base_url().'/assignedbed');
    }







    
}