<?php

namespace App\Controllers;

use App\models\SallaryModel;
use App\models\UserModel;

class SallaryController extends BaseController
{
    public function addsallary()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $data = [];
        $session=session();


        if( $this->request->getMethod()=='post'){
            $input=$this->validate([
             'sallary_month'=> 'required',
             'employee_id'=> 'required',
             'amount'=> 'required'
             
            ]);

                if ($input==true) {
            
                 $sallary= new SallaryModel();
                 $sallary->save([
            'sallary_month'=> $this->request->getPost('sallary_month'),
             'employee_id' => $this->request->getPost('employee_id'),
             'amount' => $this->request->getPost('amount')
                 ]);
                 return redirect()->to(base_url()."/sallarylist");
                }
        else {
                      $data['validation']=$this->validator;
                 }
     }
     
        $employee= new UserModel();
        $data['employee']=$employee->getAll();
        echo view('partials/sidebar',$data);
        echo view('Accounts/addsallary');
        echo view('partials/footer');

    }
    public function sallarylist()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $data = [];
        $session=session();


        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
    $sallary= new SallaryModel();
    $data['sallary']=$sallary->getSallaries();

        echo view('partials/sidebar',$data);
        echo view('Accounts/salaries');
        echo view('partials/footer');

    }
    public function deleltesallary($id)
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
   $sallary= new SallaryModel();
   $sallary->delete($id);
   return redirect()->to(base_url().
   '/sallarylist');
    }
}