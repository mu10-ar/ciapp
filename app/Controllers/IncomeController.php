<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\bedModel;
use App\models\IncomeModel;
use App\models\LoginModel;
use App\models\PrescriptionModel;
use App\models\UserModel;

class IncomeController extends BaseController
{

     
    public function addincome()
    {
     
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }

        if ($this->request->getMethod()=='post') {
            $income=new IncomeModel();

        $input=$this->validate([
               'income_amount'=> 'required',
               'income_source'=> 'required',
               'income_description'=> 'required',
           
               

           ]);


           
           
           if ($input==true) {
               
               $income->save([
                'income_amount'=> $this->request->getPost('income_amount'),
                'income_source' => $this->request->getPost('income_source'),
                'income_description' => $this->request->getPost('income_description'),
           
                
                
            ]);
            $session->setFlashdata('success', ' event Added Successfully');
              return  redirect()->to(base_url().'/incomelist');
           }
           else {
                  $data['validation']=$this->validator;
              
           } 

        }
        echo view('partials/sidebar');
        echo view('accounts/income');
        echo view('partials/footer');
      




    }

    public function incomelist()
    { $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $income= new IncomeModel();
        $data['income']=$income->getincome();


        echo view('partials/sidebar',$data);
        echo view('accounts/incomelist');
        echo view('partials/footer');
    }
    public function deleteincome($id)           
    {
        $session=session();
            if (!$session->get('logged_in')) {
                return redirect()->to(base_url().'/login');
                 
            }
            $income= new IncomeModel()
            ;
            $income->delete($id);
            return  redirect()->to(base_url().'/incomelist');
    }

    public function editincome($id)
    {
        $data=[];
     
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }

        if ($this->request->getMethod()=='post') {
            $income=new IncomeModel();

        $input=$this->validate([
               'income_amount'=> 'required',
               'income_source'=> 'required',
               'income_description'=> 'required',
           
               

           ]);


           
           
           if ($input==true) {
               
               $income->update($id,[
                'income_amount'=> $this->request->getPost('income_amount'),
                'income_source' => $this->request->getPost('income_source'),
                'income_description' => $this->request->getPost('income_description'),
           
                
                
            ]);
            $session->setFlashdata('success', ' income updated Added Successfully');
              return  redirect()->to(base_url().'/incomelist');
           }
           else {
                  $data['validation']=$this->validator;
              
           } 

        }
        $singleincome=new IncomeModel();
        $data['income']=$singleincome->getsingleincome($id);
      
        
        echo view('partials/sidebar',$data);
        echo view('accounts/editincome');
        echo view('partials/footer');
      




    }
}