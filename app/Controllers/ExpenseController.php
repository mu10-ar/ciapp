<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\bedModel;
use App\models\ExpenseModel;
use App\models\IncomeModel;
use App\models\LoginModel;
use App\models\PrescriptionModel;
use App\models\UserModel;

class ExpenseController extends BaseController
{

    public function addexpense()
    {
     
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }

        if ($this->request->getMethod()=='post') {
            $expense=new ExpenseModel();

        $input=$this->validate([
               'expense_amount'=> 'required',
               'expense_source'=> 'required',
               'expense_description'=> 'required',
           
               

           ]);


           
           
           if ($input==true) {
               
               $expense->save([
                'expense_amount'=> $this->request->getPost('expense_amount'),
                'expense_source' => $this->request->getPost('expense_source'),
                'expense_description' => $this->request->getPost('expense_description'),
           
                
                
            ]);
            $session->setFlashdata('success', ' event Added Successfully');
              return  redirect()->to(base_url().'/expenselist');
           }
           else {
                  $data['validation']=$this->validator;
              
           } 

        }
        echo view('partials/sidebar');
        echo view('accounts/expense');
        echo view('partials/footer');
      




    }
    public function expenselist()
    { $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $expense= new ExpenseModel();
        $data['expense']=$expense->getexpense();


        echo view('partials/sidebar',$data);
        echo view('accounts/expenseslist');
        echo view('partials/footer');
    }

    public function deleteexpense($id)           
    {
        $session=session();
            if (!$session->get('logged_in')) {
                return redirect()->to(base_url().'/login');
                 
            }
            $expense= new ExpenseModel()
            ;
            $expense->delete($id);
            return  redirect()->to(base_url().'/expenselist');
    }


    public function editexpense($id)
    {
        $data=[];
     
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }

        if ($this->request->getMethod()=='post') {
            $expense=new ExpenseModel();

        $input=$this->validate([
            'expense_amount'=> 'required',
            'expense_source'=> 'required',
            'expense_description'=> 'required',
           
               

           ]);


           
           
           if ($input==true) {
               
               $expense->update($id,[
                'expense_amount'=> $this->request->getPost('expense_amount'),
                'expense_source' => $this->request->getPost('expense_source'),
                'expense_description' => $this->request->getPost('expense_description'),
           
                
                
            ]);
            $session->setFlashdata('success', ' expense updated  Successfully');
              return  redirect()->to(base_url().'/expenselist');
           }
           else {
                  $data['validation']=$this->validator;
              
           } 

        }
        $singleincome=new ExpenseModel();
        $data['expense']=$singleincome->getsingleexpense($id);
      
        
        echo view('partials/sidebar',$data);
        echo view('accounts/editexpense');
        echo view('partials/footer');
      




    }


}



