<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\AssignBedmodel;
use App\models\bedModel;
use App\models\BillingModel;
use App\models\DepartmentModel;
use App\models\NotificationModel;
use App\models\UserModel;
use CodeIgniter\Database\Query;



class BillingController extends BaseController
{
    public function addbill(){ $data=[];



        
        if( $this->request->getMethod()=='post'){
            $input=$this->validate([
             'patient_id'=> 'required',
             'price'=> 'required'
            ]);
            

            
        
     
          
        if ($input==true) {
            
                 $bill= new BillingModel();
                 $bill->save([
                      'status'=> $this->request->getPost('status'),
                      'paid'=> $this->request->getPost('paid'),
                      'price'=> $this->request->getPost('price'),
                      'services'=> $this->request->getPost('services'),
                      'services_description'=> $this->request->getPost('services_description'),
                      'patient_id'=> $this->request->getPost('patient_id'),
                      'date'=> $this->request->getPost('date'),
                 ]);

                 return redirect()->to(base_url().'/billlist');
                                
        }
        else {
                      $data['validation']=$this->validator;
                 }
     }








        $patient= new UserModel();
        $data['patient']=$patient->getpatientRecord();
        echo view("partials/sidebar",$data);
        echo view("billing/addbill");
        echo view("partials/footer");
    }
}