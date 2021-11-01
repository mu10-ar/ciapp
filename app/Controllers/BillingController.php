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
    public function addbill(){ 
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $data=[];



        
        if( $this->request->getMethod()=='post'){
            $input=$this->validate([
             'patient_id'=> 'required',
             'price'=> 'required'
            ]);
            

            
        
     
          
        if ($input==true) {
                $patient=new UserModel();
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

                 $id = $this->request->getVar('patient_id');
                 $patient->update($id,[
                    'bill'=>'1'
                 ]);
                 $session->setFlashdata('success', ' Bill Added Successfully');
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



    public function Billlist()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $data=[];
        $patient=new UserModel();
        $data['patient']=$patient->getBillRecord();
        echo view("partials/sidebar",$data);
        echo view("billing/billlist");
        echo view("partials/footer");
    }


    public function paidbill()
    {

        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $data=[];
        $patient=new UserModel();
        $data['patient']=$patient->getPaidBillRecord();
        echo view("partials/sidebar",$data);
        echo view("billing/paidbill");
        echo view("partials/footer");
    }





    public function viewbill($id)
    {

        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $data=[];
        $bill= new BillingModel();
        $data['bill']=$bill->billview($id);
        echo view("partials/sidebar",$data);
        echo view("billing/billview");
        echo view("partials/footer");
    }
    public function viewpaidbill($id)
    {

        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $data=[];
        $bill= new BillingModel();
        $data['bill']=$bill->paidbillview($id);
        echo view("partials/sidebar",$data);
        echo view("billing/billview");
        echo view("partials/footer");
    }





    public function markaspaid($id)
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $bill= new BillingModel();
        $patient= new UserModel();

        $bill->whereIn('patient_id',[$id])->set(['status' => 1])->update();
        $patient->whereIn('id',[$id])->set(['bill' => 2])->update();
        return redirect()->to(base_url()."/billlist");

      
    }
}